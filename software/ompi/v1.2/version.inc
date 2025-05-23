<?php

/* Release series name */
$release_series = "1.2";
/* branch in github for this series */
$release_branch = "v1.2";
/* URL to S3 directory for this release series */
$download_prefix="https://download.open-mpi.org/release/open-mpi/v" . $release_series . "/";

/* s3 prefix to this release's data */
$s3_prefix = "release/open-mpi/v" . $release_series . "/";

/* releases must be ordered newest to oldest */
$releases = array("1.2.9", "1.2.8", "1.2.7", "1.2.6", "1.2.5", "1.2.4", "1.2.3", "1.2.2", "1.2.1", "1.2");
/* prereleases must be ordered newest to oldest.  All prereleases
   will be shown, so make an empty array when the official release
   is added to releases above */
$prereleases = array();

/* set to true if we should add a cygwin note */
$cygwin_note = 0;
