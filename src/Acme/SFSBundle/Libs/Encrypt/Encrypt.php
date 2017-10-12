<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Encrypt
 *
 * @author SFS
 */
class Encrypt {

    public function __construct() {
        
    }

    public static $default_key = "admin_sfs";

    public static function md5EntityCrypt($id, $bundle, $entity, $plus = "") {
        $id = $id + 0;
        $t_encrypt = "$bundle-$entity-$id";
        if($plus !== ""){
            $t_encrypt = "$plus-$t_encrypt";
        }
        return md5($t_encrypt);
    }

    /*public static function md5EntityCryptPlus($id, $bundle, $entity, $plus ) {
        $id = $id + 0;
        $t_encrypt = "$bundle-$entity-$id";
        return md5($t_encrypt);
    }*/

    /**
     * Returns an encrypted & utf8-encoded
     */
    public static function blowfishEncrypt($pure_string, $encryption_key = null) {
        $encryption_key = $encryption_key === null ? self::$default_key : $encryption_key;

        $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
        return base64_encode($encrypted_string);
    }

    /**
     * Returns decrypted original string
     */
    public static function blowfishDecrypt($encrypted_string, $encryption_key = null) {
        $encrypted_string = base64_decode($encrypted_string);
        $encryption_key = $encryption_key === null ? self::$default_key : $encryption_key;
        $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
        return $decrypted_string;
    }

    public static function rijndaelEncrypt($data, $key = null) {
        $key = $key === null ? self::$default_key : $key;
        return base64_encode(
                mcrypt_encrypt(
                        MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_CBC, "\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0"
                )
        );
    }

    public static function rijndaelDecrypt($data, $key = null) {
        $key = $key === null ? self::$default_key : $key;
        $decode = base64_decode($data);
        return mcrypt_decrypt(
                MCRYPT_RIJNDAEL_128, $key, $decode, MCRYPT_MODE_CBC, "\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0"
        );
    }

    public static function encrypt($data, $key = null) {
        return self::rijndaelEncrypt($data, $key);
    }

    public static function decrypt($data, $key = null) {
        return self::rijndaelDecrypt($data, $key);
    }

    public static function encryptJSON($array, $key = null) {
        $data = json_encode($array);
        return self::rijndaelEncrypt($data, $key);
    }

    public static function decryptJSON($encrypted_json, $default = array(), $key = null) {
        $decript_json = self::rijndaelDecrypt($encrypted_json, $key);
        //Clean bad chars
        $decript_json = preg_replace('/[[:cntrl:]]/', '', $decript_json);
        $array = null;
        try {
            $array = json_decode($decript_json, true);
        } catch (Exception $ex) {
            return $default;
        }
        if ($array === null) {
           return $default;
        }
        return $array;
    }

}
