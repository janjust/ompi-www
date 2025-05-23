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
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="a00273.php">hwloc_location</a></li><li class="navelem"><a class="el" href="a00277.php">hwloc_location_u</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle"><div class="title">hwloc_location::hwloc_location_u Union Reference</div></div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00086_source.php">memattrs.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a id="pub-attribs" name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:a033bad8f6b891992f0c18b85a88c5561" id="r_a033bad8f6b891992f0c18b85a88c5561"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00139.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00277.php#a033bad8f6b891992f0c18b85a88c5561">cpuset</a></td></tr>
<tr class="separator:a033bad8f6b891992f0c18b85a88c5561"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:acf2ebf75869f0a53a884ac2ab3374122" id="r_acf2ebf75869f0a53a884ac2ab3374122"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00277.php#acf2ebf75869f0a53a884ac2ab3374122">object</a></td></tr>
<tr class="separator:acf2ebf75869f0a53a884ac2ab3374122"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Actual location. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a id="a033bad8f6b891992f0c18b85a88c5561" name="a033bad8f6b891992f0c18b85a88c5561"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a033bad8f6b891992f0c18b85a88c5561">&#9670;&#160;</a></span>cpuset</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00139.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> hwloc_location::hwloc_location_u::cpuset</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Location as a cpuset, when the location type is <a class="el" href="a00168.php#gga33099ba58f607fc70925da3777688586a7135318a86361ad75fd1648e6bf6d174" title="Location is given as a cpuset, in the location cpuset union field.">HWLOC_LOCATION_TYPE_CPUSET</a>. </p>

</div>
</div>
<a id="acf2ebf75869f0a53a884ac2ab3374122" name="acf2ebf75869f0a53a884ac2ab3374122"></a>
<h2 class="memtitle"><span class="permalink"><a href="#acf2ebf75869f0a53a884ac2ab3374122">&#9670;&#160;</a></span>object</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_location::hwloc_location_u::object</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Location as an object, when the location type is <a class="el" href="a00168.php#gga33099ba58f607fc70925da3777688586af637c39b23d48cff15ddb008644aaa84" title="Location is given as an object, in the location object union field.">HWLOC_LOCATION_TYPE_OBJECT</a>. </p>

</div>
</div>
<hr/>The documentation for this union was generated from the following file:<ul>
<li><a class="el" href="a00086_source.php">memattrs.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
