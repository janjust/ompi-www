<?php
$topdir = "../../..";

include_once("version.inc");
$title = "Open MPI: Version $release_series";

include_once("$topdir/software/ompi/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$project = "Open MPI";
$list_name = "announce";
$prev_describe = "the v$release_series download page";

include_once("$topdir/includes/subscribe-announce.inc");
?>

<p><hr>

<p><strong><font color=red>PLEASE NOTE:</font></strong> The 1.1 series
of Open MPI is effectively dead.  As such, there are known bugs and
problems with the v1.1 series that have been addressed in later
versions of Open MPI.  <strong>The OMPI Team strongly recommends that
users move to a more recent version of Open MPI, if
possible.</strong></p>

<p><dv align=center><hr width=50%></div></p>

<P><?php $dir = "https://github.com/open-mpi/ompi/raw/$release_branch/NEWS";
      print("<a href=\"$dir\">"); ?>This
file</a> contains a list of changes between the releases in the Open
MPI in the v<?php print("$release_series"); ?> series.</p>

<p>See the <a href="<?php print($topdir);
?>/software/ompi/versions/timeline.php">version timeline</a> for
information on the chronology of Open MPI releases.</p>

<p>
<div align="center">

<?php
print_release_section("openmpi", "open-mpi-release", $s3_prefix, $download_prefix,
                       $releases, $prereleases, $cygwin_note);
?>
</div>
</p>

<?php
  include_once("$topdir/includes/footer.inc");
