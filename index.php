<?php
$topdir = ".";
$title = "Open MPI: <br />Open Source High Performance Computing";

include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/news.inc");

function pr($name, $url, $comma) {
  print("<a href=\"$url\">$name</a>");
  if ($comma) {
    print(", ");
  }
}
?>

<table width=100% border=0>

<tr>
<td width=80% valign=top>

<h2 align=center>A High Performance Message Passing Library</h2>

<p> The Open MPI Project is an open source <?php
print("<a href=\"http://www.mpi-forum.org/\">"); ?>Message Passing Interface</a>
implementation that is developed and maintained by a consortium of
academic, research, and industry partners.  Open MPI is therefore able
to combine the expertise, technologies, and resources from all across
the High Performance Computing community in order to build the best
MPI library available.  Open MPI offers advantages for system and
software vendors, application developers and computer science
researchers.

<p>Features implemented or in short-term development for Open MPI
include:</p>

<p>
<table align=center border=0 cellpadding=5>
<tr>
<td valign=top>
<ul>

<li> Full MPI-3.1 standards conformance, with many elements from MPI-4.0
<li> Thread safety and concurrency
<li> Dynamic process spawning
<li> Network and process fault tolerance
<li> Support network heterogeneity
<li> Single library supports all networks
<li> Run-time instrumentation
<li> Many job schedulers supported

</ul>
</td>

<td valign=top>
<ul>

<li> Many OS's supported (32 and 64 bit)
<?php #stupid emacs mode: '
?>
<li> Production quality software
<li> High performance on all platforms
<li> Portable and maintainable
<li> Tunable by installers and end-users
<li> Component-based design, documented APIs
<li> Active, responsive mailing list
<li> Open source license based on the BSD license

</ul>
</td>
</tr>
</table>
</p>

<p>Open MPI is developed in a true open source fashion by a consortium
of research, academic, and industry partners.  The <a
href="about/members/">Open MPI Team</a> page has a comprehensive
listing of all contributors and active members.</p>

<h3 align=center><a href="faq/">See the FAQ page for more technical
information</a></h3>

<h3 align=center><a href="community/lists/">Join the mailing lists</a></h3>

</td>

<td valign=top>

<?php
news("Open MPI v5.0.8 released",
     "Bug fix release",
     "");
news("Open MPI v5.0.7 released",
     "Bug fix release",
     "");
news("Open MPI v4.1.7 released",
     "Bug fix release.<br><br>
   <b>NOTE</b>: Open MPI 4.1.7 incorrectly changed the shared library
   versioning information for the OpenSHMEM interface, potentially
   causing link errors when updating from prior releases of Open MPI
   to 4.1.7.  This release resets the shared library version number
   history to allow updates from Open MPI 4.1.6 and prior.  Customers
   who updated to 4.1.7 and relinked their OpenSHMEM applications will
   have to relink their application again.",
     "https://www.mail-archive.com/announce@lists.open-mpi.org/msg00171.html");
news("Open MPI v5.0.6 released",
     "Bug fix release",
     "");
news("hwloc 2.12.1",
     "Stable release",
     "https://sympa.inria.fr/sympa/arc/hwloc-announce/2025-05/msg00001.html");
?>
</td>
</tr>
</table>

<?php
include_once("$topdir/includes/footer.inc");
