<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.9.8 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
$(function() {
  initMenu('',false,false,'search.php','Search');
});
/* @license-end */
</script>
<div id="main-nav"></div>
</div><!-- top -->
<div class="header">
  <div class="headertitle"><div class="title">Related Pages</div></div>
</div><!--header-->
<div class="contents">
<div class="textblock">Here is a list of all related documentation pages:</div><div class="directory">
<table class="directory">
<tr id="row_0_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00341.php" target="_self">Installation</a></td><td class="desc"></td></tr>
<tr id="row_1_" class="odd"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00342.php" target="_self">Compiling software on top of hwloc&#39;s C API</a></td><td class="desc"></td></tr>
<tr id="row_2_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00343.php" target="_self">Terms and Definitions</a></td><td class="desc"></td></tr>
<tr id="row_3_" class="odd"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00344.php" target="_self">Command-Line Tools</a></td><td class="desc"></td></tr>
<tr id="row_4_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00345.php" target="_self">Environment Variables</a></td><td class="desc"></td></tr>
<tr id="row_5_" class="odd"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00346.php" target="_self">CPU and Memory Binding Overview</a></td><td class="desc"></td></tr>
<tr id="row_6_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00347.php" target="_self">I/O Devices</a></td><td class="desc"></td></tr>
<tr id="row_7_" class="odd"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00348.php" target="_self">Miscellaneous objects</a></td><td class="desc"></td></tr>
<tr id="row_8_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00349.php" target="_self">Object attributes</a></td><td class="desc"></td></tr>
<tr id="row_9_" class="odd"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00350.php" target="_self">Topology Attributes: Distances, Memory Attributes and CPU Kinds</a></td><td class="desc"></td></tr>
<tr id="row_10_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00351.php" target="_self">Heterogeneous Memory</a></td><td class="desc"></td></tr>
<tr id="row_11_" class="odd"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00352.php" target="_self">Importing and exporting topologies from/to XML files</a></td><td class="desc"></td></tr>
<tr id="row_12_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00353.php" target="_self">Synthetic topologies</a></td><td class="desc"></td></tr>
<tr id="row_13_" class="odd"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00354.php" target="_self">Interoperability With Other Software</a></td><td class="desc"></td></tr>
<tr id="row_14_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00355.php" target="_self">Thread Safety</a></td><td class="desc"></td></tr>
<tr id="row_15_" class="odd"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00356.php" target="_self">Components and plugins</a></td><td class="desc"></td></tr>
<tr id="row_16_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00357.php" target="_self">Embedding hwloc in Other Software</a></td><td class="desc"></td></tr>
<tr id="row_17_" class="odd"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00358.php" target="_self">Frequently Asked Questions (FAQ)</a></td><td class="desc"></td></tr>
<tr id="row_18_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><a class="el" href="a00359.php" target="_self">Upgrading to the hwloc 2.0 API</a></td><td class="desc"></td></tr>
</table>
</div><!-- directory -->
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
