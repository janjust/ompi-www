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
<!-- Generated by Doxygen 1.7.3 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<h1>hwloc_topology_support Struct Reference<div class="ingroups"><a class="el" href="group__hwlocality__configuration.php">Configure Topology Detection</a></div></h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="hwloc_topology_support" -->
<p>Set of flags describing actual support for this topology.  
<a href="#_details">More...</a></p>

<p><code>#include &lt;<a class="el" href="hwloc_8h_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak"/>
<a class="el" href="structhwloc__topology__discovery__support.php">hwloc_topology_discovery_support</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__topology__support.php#aea3fbd7653d987d81f848636c420504d">discovery</a></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak"/>
<a class="el" href="structhwloc__topology__cpubind__support.php">hwloc_topology_cpubind_support</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__topology__support.php#adef2bb91f74c3e70a2a071393caf5f56">cpubind</a></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak"/>
<a class="el" href="structhwloc__topology__membind__support.php">hwloc_topology_membind_support</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__topology__support.php#ac6eb62ae8bc0a68dce679a7107a36194">membind</a></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<div class="textblock"><p>Set of flags describing actual support for this topology. </p>
<p>This is retrieved with <a class="el" href="group__hwlocality__configuration.php#gac2126e105f3ae708efca2e90d612625a" title="Retrieve the topology support.">hwloc_topology_get_support()</a> and will be valid until the topology object is destroyed. Note: the values are correct only after discovery. </p>
</div><hr/><h2>Field Documentation</h2>
<a class="anchor" id="adef2bb91f74c3e70a2a071393caf5f56"></a><!-- doxytag: member="hwloc_topology_support::cpubind" ref="adef2bb91f74c3e70a2a071393caf5f56" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__topology__cpubind__support.php">hwloc_topology_cpubind_support</a>* <a class="el" href="structhwloc__topology__support.php#adef2bb91f74c3e70a2a071393caf5f56">hwloc_topology_support::cpubind</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

</div>
</div>
<a class="anchor" id="aea3fbd7653d987d81f848636c420504d"></a><!-- doxytag: member="hwloc_topology_support::discovery" ref="aea3fbd7653d987d81f848636c420504d" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__topology__discovery__support.php">hwloc_topology_discovery_support</a>* <a class="el" href="structhwloc__topology__support.php#aea3fbd7653d987d81f848636c420504d">hwloc_topology_support::discovery</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

</div>
</div>
<a class="anchor" id="ac6eb62ae8bc0a68dce679a7107a36194"></a><!-- doxytag: member="hwloc_topology_support::membind" ref="ac6eb62ae8bc0a68dce679a7107a36194" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__topology__membind__support.php">hwloc_topology_membind_support</a>* <a class="el" href="structhwloc__topology__support.php#ac6eb62ae8bc0a68dce679a7107a36194">hwloc_topology_support::membind</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="hwloc_8h_source.php">hwloc.h</a></li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");
