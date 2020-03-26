<?php

namespace InstagramFollowers\Traits;

trait GenerateUUIDV4Trait {

    /**
     * @param bool $keepDashes
     * @return string
     */
    public function generateUUID($keepDashes = true) {
        $uuid = sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );

        return $keepDashes ? $uuid : str_replace('-', '', $uuid);
    }
}