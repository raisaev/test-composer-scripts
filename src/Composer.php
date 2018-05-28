<?php

namespace RAIsaev;

class Composer
{
    protected static $cronFilePath = 'pub/endpoint.php';

    //########################################

    public static function postPackageUpdate(\Composer\Script\Event $event)
    {
        $event->getIO()->write('postPackageUpdate event fired');

        $package = $event->getComposer()->getPackage();
        $installationManager = $event->getComposer()->getInstallationManager();

        $originDir = $installationManager->getInstallPath($package) .DIRECTORY_SEPARATOR. self::$cronFilePath;
        $targetDir = $event->getComposer()->getConfig()->get('vendor-dir') .'/../'. self::$cronFilePath;

        //copy(self::$cronFilePath, $targetPath);

        var_dump(
            $originDir,
            $targetDir,
            $package->getName(),
            $installationManager->getInstallPath($package),
            realpath($installationManager->getInstallPath($package))
        );
        die;
    }

    public static function postUpdateCmd(\Composer\Script\Event $event)
    {
        $event->getIO()->write('postUpdateCmd event fired');

        $package = $event->getComposer()->getPackage();
        $installationManager = $event->getComposer()->getInstallationManager();

        $originDir = $installationManager->getInstallPath($package) .DIRECTORY_SEPARATOR. self::$cronFilePath;
        $targetDir = $event->getComposer()->getConfig()->get('vendor-dir') .'/../'. self::$cronFilePath;

        //copy(self::$cronFilePath, $targetPath);

        var_dump(
            $originDir,
            $targetDir,
            $package->getName(),
            $installationManager->getInstallPath($package),
            realpath($installationManager->getInstallPath($package))
        );
        die;
    }

    public static function postInstallCmd(\Composer\Script\Event $event)
    {
        $event->getIO()->write('postInstallCmd event fired');

        $package = $event->getComposer()->getPackage();
        $installationManager = $event->getComposer()->getInstallationManager();

        $originDir = $installationManager->getInstallPath($package) .DIRECTORY_SEPARATOR. self::$cronFilePath;
        $targetDir = $event->getComposer()->getConfig()->get('vendor-dir') .'/../'. self::$cronFilePath;

        //copy(self::$cronFilePath, $targetPath);

        var_dump(
            $originDir,
            $targetDir,
            $package->getName(),
            $installationManager->getInstallPath($package),
            realpath($installationManager->getInstallPath($package))
        );
        die;
    }

    //########################################
}