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
<!-- Generated by Doxygen 1.8.8 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Looking at Cache Objects</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:gad108a09ce400222fe45545257d575489"><td class="memItemLeft" align="right" valign="top">static int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00088.php#gad108a09ce400222fe45545257d575489">hwloc_get_cache_type_depth</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned cachelevel, <a class="el" href="a00074.php#gab6e1e7efedae8b341f3ee14fbe53d66c">hwloc_obj_cache_type_t</a> cachetype)</td></tr>
<tr class="separator:gad108a09ce400222fe45545257d575489"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gac4cd480a5deaa4ada047fdd11ae4c070"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00075.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00088.php#gac4cd480a5deaa4ada047fdd11ae4c070">hwloc_get_cache_covering_cpuset</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set)</td></tr>
<tr class="separator:gac4cd480a5deaa4ada047fdd11ae4c070"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga36f48c32837c7a70b424706e213dcd71"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00075.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00088.php#ga36f48c32837c7a70b424706e213dcd71">hwloc_get_shared_cache_covering_obj</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00075.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj)</td></tr>
<tr class="separator:ga36f48c32837c7a70b424706e213dcd71"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="gac4cd480a5deaa4ada047fdd11ae4c070"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00075.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_cache_covering_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the first cache covering a cpuset <code>set</code>. </p>
<dl class="section return"><dt>Returns</dt><dd><code>NULL</code> if no cache matches.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>This function cannot work if the root object does not have a CPU set, e.g. if the topology is made of different machines. </dd></dl>

</div>
</div>
<a class="anchor" id="gad108a09ce400222fe45545257d575489"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static int hwloc_get_cache_type_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>cachelevel</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00074.php#gab6e1e7efedae8b341f3ee14fbe53d66c">hwloc_obj_cache_type_t</a>&#160;</td>
          <td class="paramname"><em>cachetype</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Find the depth of cache objects matching cache depth and type. </p>
<p>Return the depth of the topology level that contains cache objects whose attributes match <code>cachedepth</code> and <code>cachetype</code>. This function intends to disambiguate the case where <a class="el" href="a00078.php#ga8bec782e21be313750da70cf7428b374" title="Returns the depth of objects of type type. ">hwloc_get_type_depth()</a> returns <code>HWLOC_TYPE_DEPTH_MULTIPLE</code>.</p>
<p>If no cache level matches, <code>HWLOC_TYPE_DEPTH_UNKNOWN</code> is returned.</p>
<p>If <code>cachetype</code> is <code>HWLOC_OBJ_CACHE_UNIFIED</code>, the depth of the unique matching unified cache level is returned.</p>
<p>If <code>cachetype</code> is <code>HWLOC_OBJ_CACHE_DATA</code> or <code>HWLOC_OBJ_CACHE_INSTRUCTION</code>, either a matching cache, or a unified cache is returned.</p>
<p>If <code>cachetype</code> is <code>-1</code>, it is ignored and multiple levels may match. The function returns either the depth of a uniquely matching level or <code>HWLOC_TYPE_DEPTH_MULTIPLE</code>. </p>

</div>
</div>
<a class="anchor" id="ga36f48c32837c7a70b424706e213dcd71"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00075.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_shared_cache_covering_obj </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00075.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the first cache shared between an object and somebody else. </p>
<dl class="section return"><dt>Returns</dt><dd><code>NULL</code> if no cache matches or if an invalid object is given. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
