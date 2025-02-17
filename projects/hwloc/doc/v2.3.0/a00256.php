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
<!-- Generated by Doxygen 1.8.20 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
$(function() {
  initMenu('',false,false,'search.php','Search');
});
/* @license-end */</script>
<div id="main-nav"></div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_topology_discovery_support Struct Reference<div class="ingroups"><a class="el" href="a00160.php">Topology Detection Configuration and Query</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00089_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:ad7bb4ecf7a82f5a04fc632e9592ad3ab"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00256.php#ad7bb4ecf7a82f5a04fc632e9592ad3ab">pu</a></td></tr>
<tr class="separator:ad7bb4ecf7a82f5a04fc632e9592ad3ab"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a955f96066cb9e4cd34e2a3710ad43e80"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00256.php#a955f96066cb9e4cd34e2a3710ad43e80">numa</a></td></tr>
<tr class="separator:a955f96066cb9e4cd34e2a3710ad43e80"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af193eb858e40e12ef4923f5ed0e1f11a"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00256.php#af193eb858e40e12ef4923f5ed0e1f11a">numa_memory</a></td></tr>
<tr class="separator:af193eb858e40e12ef4923f5ed0e1f11a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af3c97b28781a2972cf8eaaf94a6617da"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00256.php#af3c97b28781a2972cf8eaaf94a6617da">disallowed_pu</a></td></tr>
<tr class="separator:af3c97b28781a2972cf8eaaf94a6617da"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a970e65235873bcdb9669a9805161ce03"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00256.php#a970e65235873bcdb9669a9805161ce03">disallowed_numa</a></td></tr>
<tr class="separator:a970e65235873bcdb9669a9805161ce03"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Flags describing actual discovery support for this topology. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a id="a970e65235873bcdb9669a9805161ce03"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a970e65235873bcdb9669a9805161ce03">&#9670;&nbsp;</a></span>disallowed_numa</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_discovery_support::disallowed_numa</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Detecting and identifying NUMA nodes that are not available to the current process is supported. </p>

</div>
</div>
<a id="af3c97b28781a2972cf8eaaf94a6617da"></a>
<h2 class="memtitle"><span class="permalink"><a href="#af3c97b28781a2972cf8eaaf94a6617da">&#9670;&nbsp;</a></span>disallowed_pu</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_discovery_support::disallowed_pu</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Detecting and identifying PU objects that are not available to the current process is supported. </p>

</div>
</div>
<a id="a955f96066cb9e4cd34e2a3710ad43e80"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a955f96066cb9e4cd34e2a3710ad43e80">&#9670;&nbsp;</a></span>numa</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_discovery_support::numa</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Detecting the number of NUMA nodes is supported. </p>

</div>
</div>
<a id="af193eb858e40e12ef4923f5ed0e1f11a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#af193eb858e40e12ef4923f5ed0e1f11a">&#9670;&nbsp;</a></span>numa_memory</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_discovery_support::numa_memory</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Detecting the amount of memory in NUMA nodes is supported. </p>

</div>
</div>
<a id="ad7bb4ecf7a82f5a04fc632e9592ad3ab"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad7bb4ecf7a82f5a04fc632e9592ad3ab">&#9670;&nbsp;</a></span>pu</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_discovery_support::pu</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Detecting the number of PU objects is supported. </p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="a00089_source.php">hwloc.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
