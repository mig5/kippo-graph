<?php
#Copyright (C) 2008 Stefan Gehrig
#Attribution-ShareAlike 3.0 Unported (CC BY-SA 3.0) 
#More information: http://stackoverflow.com/a/236115/1107118

define('REMOTE_VERSION', 'http://bruteforce.gr/kippo-graph-version.txt');

// this is the version of the deployed script
define('VERSION', '0.9');

function isUpToDate()
{
    $remoteVersion=trim(@file_get_contents(REMOTE_VERSION));
    return version_compare(VERSION, $remoteVersion, 'ge');
}

function report_version()
{
    echo "Version: ".VERSION;
    if(UPDATE_CHECK == 'YES')
    {
        if(isUpToDate()) {
            echo LATEST_VERSION;
        }
        else {
            echo NEW_VERSION_AVAILABLE;
        }
    }
}
