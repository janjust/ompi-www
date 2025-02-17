<?php
$topdir = "..";
$title = "Open MPI Documentation";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>

Documentation for the following versions is available:

<h2>Current release series</h2>

<p><ul>

<li><a href="https://docs.open-mpi.org/en/v5.0.x/"><strong>v5.0 series</strong></a>.
This documentation reflects the latest progression in the 5.0.x series.
<strong><font
color=red><?php
  $t = mktime(0, 0, 0, 2, 1, 2024);
  if (time() < $t) {
          printf("This stable series is relatively new.  Please upgrade with caution and test your codes thoroughly.");
  } else {
          printf("This is the recommended series for all users to download and use.");
  }
?></font></strong></li>

</ul></p>

</ul></p>

<h2>Prior stable release series</h2>
<p><ul>
<li><a href="v4.1"><strong>v4.1 series</strong></a>.
This documentation reflects the latest progression in the 4.1.x series.
</li>

</ul></p>

<h2>Older series (retired, deprecated, or otherwise no longer in
development)</h2>

<p><ul>

<li><a href="v4.0"><strong>v4.0 series</strong></a>.
This documentation reflects the latest progression in the 4.0.x series.
</li>

<li><a href="v3.1/"><strong>v3.1 series</strong></a>
(prior stable release series). This documentation reflects the latest progression in the 3.1.x series.
The emphasis of this
tree is on bug fixes and stability, although it also introduced a few
new features (compared to the v2.0 series).</li>
</li>

<li><a href="v3.0/"><strong>v3.0 series
</strong></a> (prior stable release series).  This documentation reflects
the latest progression in the 3.0.x series.
The emphasis of this
tree is on bug fixes and stability, although it also introduced many
new features (compared to the v2.0 series).</li>
</li>

<li><a href="v2.1/"><strong>v2.1 series
</strong></a> (prior stable release series).  This documentation reflects
the latest progression in the 2.1.x series.  The emphasis of this
tree is on bug fixes and stability, although it also introduced a few
new features (compared to the v2.0 series).</li>

<li><a href="v2.0/"><strong>v2.0 series
</strong></a> (prior stable release series).  This documentation reflects
the latest progression in the 2.0.x series.  The emphasis of this
tree is on bug fixes and stability, although it also introduced many
new features (compared to the v1.10 series).</li>

<li><a href="v1.10/"><strong>v1.10 series
</strong></a> (prior stable release series).  This documentation reflects
the latest progression in the 1.10.x series.  The emphasis of this
tree is on bug fixes and stability, although it also introduces a few
new features (compared to the v1.8 series).  This documentation is unlikely to be
updated any more.</li>

<li><a href="v1.8/"><strong>v1.8 series</strong></a> (previous super
stable series).  This documentation reflects the latest
progression in the 1.8.x series.  This documentation is unlikely to be
updated any more.</li>

<li><a href="v1.7/"><strong>v1.7 series</strong></a> (previous feature
series): This documentation is the latest progression in the feature 1.7.x
series; it was morphed into the v1.8 stable series in March of
2014.  This documentation is unlikely to be updated any more.</li>

<li><a href="v1.6/"><strong>v1.6 series</strong></a> (previous super
stable series): This documentation is the last in the progression of
the super stable 1.6.x series.  This documentation is unlikely to be
updated any more.</li>

<li><a href="v1.5/"><strong>v1.5 series</strong></a> (previous feature
series): This documentation is the latest progression in the feature 1.5.x
series; it was morphed into the v1.6 stable series in May of
2012.  This documentation is unlikely to be updated any more.</li>

<li><a href="v1.4/"><strong>v1.4 series</strong></a> (previous super
stable series): This documentation is the last in the progression of
the super stable 1.4.x series.  This documentation is unlikely to be
updated any more.</li>

<li><a href="v1.3/"><strong>v1.3 series</strong></a> (previous feature
series): This documentation is the latest progression in the feature 1.3.x
series; it was morphed into the v1.4 stable series in December of
2009.  This documentation is unlikely to be updated any more.</li>

<li><a href="v1.2/"><strong>v1.2 series</strong></a> (previous
stable): This documentation reflects the latest progression in the
stable 1.2.x series.  This documentation is unlikely to be updated any
more.</li>

<li><a href="v1.1/"><strong>v1.1 series</strong></a> (older stable):
This documentation reflects the latest progression in the stable 1.1.x
series.  It has not been updated in a long, long time.</li>

</ul></p>

<?php
include_once("$topdir/includes/footer.inc"); 
