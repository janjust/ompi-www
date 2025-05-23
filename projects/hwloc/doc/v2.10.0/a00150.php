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
<!-- Generated by Doxygen 1.9.4 -->
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
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle"><div class="title">Finding Objects covering at least CPU set</div></div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a id="func-members" name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga0e66aa2dc6b2527cfd10723af646c9d7"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00138.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00150.php#ga0e66aa2dc6b2527cfd10723af646c9d7">hwloc_get_child_covering_cpuset</a> (<a class="el" href="a00139.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00136.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, <a class="el" href="a00138.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> parent)</td></tr>
<tr class="separator:ga0e66aa2dc6b2527cfd10723af646c9d7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga41acdcdbb8b95d70ecf6c572a3f67dca"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00138.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00150.php#ga41acdcdbb8b95d70ecf6c572a3f67dca">hwloc_get_obj_covering_cpuset</a> (<a class="el" href="a00139.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00136.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set)</td></tr>
<tr class="separator:ga41acdcdbb8b95d70ecf6c572a3f67dca"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaba4b6d86eba1169ced4b0e941d2bb5f0"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00138.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00150.php#gaba4b6d86eba1169ced4b0e941d2bb5f0">hwloc_get_next_obj_covering_cpuset_by_depth</a> (<a class="el" href="a00139.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00136.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, int depth, <a class="el" href="a00138.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> prev)</td></tr>
<tr class="separator:gaba4b6d86eba1169ced4b0e941d2bb5f0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga91cfae08b092e7966002e15d1e987213"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00138.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00150.php#ga91cfae08b092e7966002e15d1e987213">hwloc_get_next_obj_covering_cpuset_by_type</a> (<a class="el" href="a00139.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00136.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, <a class="el" href="a00137.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, <a class="el" href="a00138.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> prev)</td></tr>
<tr class="separator:ga91cfae08b092e7966002e15d1e987213"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Function Documentation</h2>
<a id="ga0e66aa2dc6b2527cfd10723af646c9d7" name="ga0e66aa2dc6b2527cfd10723af646c9d7"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ga0e66aa2dc6b2527cfd10723af646c9d7">&#9670;&nbsp;</a></span>hwloc_get_child_covering_cpuset()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00138.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_child_covering_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00139.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00136.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00138.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>parent</em>&#160;</td>
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

<p>Get the child covering at least CPU set <code>set</code>. </p>
<dl class="section return"><dt>Returns</dt><dd>the child that covers the set entirely. </dd>
<dd>
<code>NULL</code> if no child matches or if <code>set</code> is empty.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>This function cannot work if parent does not have a CPU set (I/O or Misc objects). </dd></dl>

</div>
</div>
<a id="gaba4b6d86eba1169ced4b0e941d2bb5f0" name="gaba4b6d86eba1169ced4b0e941d2bb5f0"></a>
<h2 class="memtitle"><span class="permalink"><a href="#gaba4b6d86eba1169ced4b0e941d2bb5f0">&#9670;&nbsp;</a></span>hwloc_get_next_obj_covering_cpuset_by_depth()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00138.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_next_obj_covering_cpuset_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00139.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00136.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>depth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00138.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>prev</em>&#160;</td>
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

<p>Iterate through same-depth objects covering at least CPU set <code>set</code>. </p>
<p >The next invokation should pass the previous return value in <code>prev</code> so as to obtain the next object covering at least another part of <code>set</code>.</p>
<dl class="section return"><dt>Returns</dt><dd>the first object at depth <code>depth</code> covering at least part of CPU set <code>set</code> if object <code>prev</code> is <code>NULL</code>. </dd>
<dd>
the next one if <code>prev</code> is not <code>NULL</code>. </dd>
<dd>
<code>NULL</code> if there is no next object.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>This function cannot work if objects at the given depth do not have CPU sets (I/O or Misc objects). </dd></dl>

</div>
</div>
<a id="ga91cfae08b092e7966002e15d1e987213" name="ga91cfae08b092e7966002e15d1e987213"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ga91cfae08b092e7966002e15d1e987213">&#9670;&nbsp;</a></span>hwloc_get_next_obj_covering_cpuset_by_type()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00138.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_next_obj_covering_cpuset_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00139.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00136.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00137.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00138.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>prev</em>&#160;</td>
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

<p>Iterate through same-type objects covering at least CPU set <code>set</code>. </p>
<p >The next invokation should pass the previous return value in <code>prev</code> so as to obtain the next object of type <code>type</code> covering at least another part of <code>set</code>.</p>
<dl class="section return"><dt>Returns</dt><dd>the first object of type <code>type</code> covering at least part of CPU set <code>set</code> if object <code>prev</code> is <code>NULL</code>. </dd>
<dd>
the next one if <code>prev</code> is not <code>NULL</code>. </dd>
<dd>
<code>NULL</code> if there is no next object. </dd>
<dd>
<code>NULL</code> if there is no depth for the given type. </dd>
<dd>
<code>NULL</code> if there are multiple depths for the given type, the caller should fallback to <a class="el" href="a00150.php#gaba4b6d86eba1169ced4b0e941d2bb5f0" title="Iterate through same-depth objects covering at least CPU set set.">hwloc_get_next_obj_covering_cpuset_by_depth()</a>.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>This function cannot work if objects of the given type do not have CPU sets (I/O or Misc objects). </dd></dl>

</div>
</div>
<a id="ga41acdcdbb8b95d70ecf6c572a3f67dca" name="ga41acdcdbb8b95d70ecf6c572a3f67dca"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ga41acdcdbb8b95d70ecf6c572a3f67dca">&#9670;&nbsp;</a></span>hwloc_get_obj_covering_cpuset()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00138.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_obj_covering_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00139.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00136.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
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

<p>Get the lowest object covering at least CPU set <code>set</code>. </p>
<dl class="section return"><dt>Returns</dt><dd>the lowest object covering the set entirely. </dd>
<dd>
<code>NULL</code> if no object matches or if <code>set</code> is empty. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
