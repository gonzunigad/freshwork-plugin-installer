<?php

namespace gonzunigad\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class PluginInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getPackageBasePath(PackageInterface $package)
    {
       $lastPart = explode("/",$package->getPrettyName());
		$lastPart = $lastPart[count($lastPart)-1];

        return 'freshwork/plugins/'.$lastPart;
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'freshwork-plugin' === $packageType;
    }
}