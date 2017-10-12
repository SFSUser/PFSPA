<?php

namespace Acme\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ServicesController extends Controller {
   /**
   * @Route("/uploads/backup", name="url_uploads_backup")
   */
   public function uploadsbackupAction(){
      $tmp_file = tempnam('.','');

      $uploads_path =  \Acme\SFSBundle\Entity\SFSUploads::getDataDir() . "/web";

      $rootPath = $uploads_path;
      $zip = new \ZipArchive();
      $zip->open($tmp_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);
      $files = new \RecursiveIteratorIterator(
          new \RecursiveDirectoryIterator($rootPath),
          \RecursiveIteratorIterator::LEAVES_ONLY
      );
      foreach ($files as $name => $file)
      {
          if (!$file->isDir())
          {
              $filePath = $file->getRealPath();
              $relativePath = substr($filePath, strlen($rootPath) + 1);
              $zip->addFile($filePath, $relativePath);
          }
      }
      $zip->close();

      $content = file_get_contents($tmp_file);
      $response = new \Symfony\Component\HttpFoundation\Response($content, 200);
      $response->headers->set('Content-Type', "application/zip");
      //$response->headers->set('filename', "application/zip");
      header("Content-Disposition: inline; filename=Archivos.rar");
      return $response;
   }

   /**
    * @Route("/usuarios/imagenes/backup", name="url_usuarios_imagenes_backup")
    */
   public function imagesbackupAction(){
      \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("EntityUtils");
      $data = \EntityUtils::nativeQuery(
         $this->getDoctrine(),
         "SELECT u.foto, u.firma, u.documento, u.id FROM Usuarios AS u WHERE concat(u.foto,u.firma) != ''",
         array());
      $files = array();
      foreach ($data as $value) {
         $identifier = "|" . $value["id"]. "_" . $value["documento"];
         $files[] = $value["foto"] . $identifier;
         $files[] = $value["firma"] . $identifier;
      }
      /*$files = array(
          'http://i.imgur.com/ugVYi5J.jpg|01_123123123123',
          'http://google.com/images/logo.png|02_1sds123123'
      );*/

      $count = count($files);
      $tmp_file = tempnam('.','');
      $zip = new \ZipArchive();
      $zip->open($tmp_file, \ZipArchive::CREATE);
      # loop through each file
      foreach($files as $file){
          # download file
          $ps = explode("|",$file);
          $name = trim($ps[0]);
          if($name == "") continue;
          $download_file = file_get_contents($name);
          #add it to the zip
          $zip->addFromString($ps[1] . "_" . basename($name), $download_file);
      }
      # close zip
      $zip->close();
      # send the file to the browser as a download
      //header('Content-disposition: attachment; filename=download.zip');
      //header('Content-type: application/zip');
      //readfile($tmp_file);
      $content = file_get_contents($tmp_file);
      $response = new \Symfony\Component\HttpFoundation\Response($content, 200);
		$response->headers->set('Content-Type', "application/zip");
		//$response->headers->set('filename', "application/zip");
      header("Content-Disposition: inline; filename=Imagenes_$count.rar");
		return $response;
   }

	/*
	 * Funci�n para realizar copias de serguridad de im�genes a�adiendo URL
	 */
    /**
     * @Route("/backup/img/")
     */
    public function imgurAction() {
        $r = $this->getRequest();
        $url = $r->get("i", null);

        if($url === null){
            return new \Symfony\Component\HttpFoundation\Response("<h1>Imagen no especificada</h1>");
        }

        $file_name = basename($url);
        $base_dir = \Acme\SFSBundle\Entity\SFSUploads::getDataDir();
        $final_dir = "$base_dir/web/backups/";
        $final_file = $final_dir . $file_name;
		//$check_url = "";

		if (!file_exists($final_dir)) {
			mkdir($final_dir, 0777, true);
		}
		$backup_file = file_exists($final_file);

		$content = null;

		$is_404 = false;
		$img_d =  getimagesize($url);
		$is_404 = $img_d === false;
		//IMGUR filter!
		$is_404 = $img_d[0] === 161 && $img_d[1] === 81;
		$mime_type = $img_d !== false ? $img_d["mime"] : "";

		//Existe URL, no existe COPIA
		if (!$is_404 && !$backup_file) {
			$content = file_get_contents($url);
			file_put_contents($final_file, $content);
			$backup_file = file_exists($final_file);;
		}
		//No existe URL, pero existe COPIA
		if($is_404 && $backup_file){
			$content = file_get_contents($final_file);
		}
		//No existe URL, no existe COPIA
		if($is_404 && !$backup_file){
			//Votar un 404 parce
			return $this->redirect("http://static2.hexblot.gr/sites/default/files/styles/articlefull/public/article_images/image-not-found.gif", 301); //http://i.imgur.com/JSTg6vr.jpg
		}
		//Existe URL, existe COPIA
		if(!$is_404 && $backup_file) {
			return $this->redirect($url . "#BACK_OK", 301);
		}


		$response = new \Symfony\Component\HttpFoundation\Response($content, 200);
		$response->headers->set('Content-Type', $mime_type);
		return $response;
        //return new \Symfony\Component\HttpFoundation\Response();
    }
}
