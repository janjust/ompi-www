<?php

/* Release series name */
$release_series = "2.11";
/* branch in github for this series */
$release_branch = "v2.11";
/* URL to S3 directory for this release series */
$download_prefix="https://download.open-mpi.org/release/hwloc/v" . $release_series . "/";

/* s3 prefix to this release's data */
$s3_prefix = "release/hwloc/v" . $release_series . "/";

/* releases must be ordered newest to oldest */
$releases = array("2.11.2", "2.11.1", "2.11.0");
/* prereleases must be ordered newest to oldest.  All prereleases
   will be shown, so make an empty array when the official release
   is added to releases above */
$prereleases = array();
