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
<!-- Generated by Doxygen 1.6.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul>
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs">
    <ul>
      <li><a href="files.php"><span>File&nbsp;List</span></a></li>
      <li><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
<h1>cpuset.h File Reference</h1>
<p>The Cpuset API, for use in hwloc itself.  
<a href="#_details">More...</a></p>
<code>#include &lt;hwloc/config.h&gt;</code><br/>

<p><a href="cpuset_8h_source.php">Go to the source code of this file.</a></p>
<table border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2"><h2>Defines</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">#define&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga8f896ce703ad1740fdf9ce8ac6361359">hwloc_cpuset_foreach_begin</a>(cpu, set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Loop macro iterating on CPU set <code>set</code>.  <a href="group__hwlocality__cpuset.php#ga8f896ce703ad1740fdf9ce8ac6361359"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">#define&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gae2974be78a7d7cddbd38cb23fcc6240a">hwloc_cpuset_foreach_end</a>()&nbsp;&nbsp;&nbsp;}</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">End of loop.  <a href="group__hwlocality__cpuset.php#gae2974be78a7d7cddbd38cb23fcc6240a"></a><br/></td></tr>
<tr><td colspan="2"><h2>Typedefs</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">typedef struct hwloc_cpuset_s *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Set of CPUs represented as an opaque pointer to an internal bitmask.  <a href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">typedef struct hwloc_cpuset_s *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a></td></tr>
<tr><td colspan="2"><h2>Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga82803256c7e78369aad77a2a9e5599a2">hwloc_cpuset_alloc</a> (void)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Allocate a new empty CPU set.  <a href="group__hwlocality__cpuset.php#ga82803256c7e78369aad77a2a9e5599a2"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gaf5d5a9e082a43f8311fdcff55e611b23">hwloc_cpuset_free</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Free CPU set <code>set</code>.  <a href="group__hwlocality__cpuset.php#gaf5d5a9e082a43f8311fdcff55e611b23"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga19d8c163e4834ba69c808560aa5a89b3">hwloc_cpuset_dup</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Duplicate CPU set <code>set</code> by allocating a new CPU set and copying its contents.  <a href="group__hwlocality__cpuset.php#ga19d8c163e4834ba69c808560aa5a89b3"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gadad3d25553afca090a81ffa270208f2e">hwloc_cpuset_copy</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> dst, <a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> src)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Copy the contents of CPU set <code>src</code> into the already allocated CPU set <code>dst</code>.  <a href="group__hwlocality__cpuset.php#gadad3d25553afca090a81ffa270208f2e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gae60387d479de85cd556ce5faa8f0894e">hwloc_cpuset_snprintf</a> (char *restrict buf, size_t buflen, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Stringify a cpuset.  <a href="group__hwlocality__cpuset.php#gae60387d479de85cd556ce5faa8f0894e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga29160016d2e89318b5db99046d93dc0a">hwloc_cpuset_asprintf</a> (char **strp, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Stringify a cpuset into a newly allocated string.  <a href="group__hwlocality__cpuset.php#ga29160016d2e89318b5db99046d93dc0a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga63e62db35640c1b90684952d7a3b5175">hwloc_cpuset_from_string</a> (const char *restrict string)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Parse a cpuset string.  <a href="group__hwlocality__cpuset.php#ga63e62db35640c1b90684952d7a3b5175"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga4d63507128a35e6eda3fa6104970ac99">hwloc_cpuset_zero</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Primitives &amp; macros for building, modifying and consulting "sets" of cpus.  <a href="group__hwlocality__cpuset.php#ga4d63507128a35e6eda3fa6104970ac99"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gad1a6c02ae378aff412c2b843cf8cc3f4">hwloc_cpuset_fill</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Fill CPU set <code>set</code>.  <a href="group__hwlocality__cpuset.php#gad1a6c02ae378aff412c2b843cf8cc3f4"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga1dbccf3bbf6e6ec0464bfd9e4d47e5cb">hwloc_cpuset_from_ulong</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, unsigned long mask)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Setup CPU set <code>set</code> from unsigned long <code>mask</code>.  <a href="group__hwlocality__cpuset.php#ga1dbccf3bbf6e6ec0464bfd9e4d47e5cb"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gae681e6cd7486dbd03185a8760dc2fa5e">hwloc_cpuset_from_ith_ulong</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, int i, unsigned long mask)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Setup CPU set <code>set</code> from unsigned long <code>mask</code> used as <code>i</code> -th subset.  <a href="group__hwlocality__cpuset.php#gae681e6cd7486dbd03185a8760dc2fa5e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">unsigned long&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gab5930725c5193c3c3864989b15c746f4">hwloc_cpuset_to_ulong</a> (<a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Convert the beginning part of CPU set <code>set</code> into unsigned long <code>mask</code>.  <a href="group__hwlocality__cpuset.php#gab5930725c5193c3c3864989b15c746f4"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">unsigned long&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga15761bb808fef3477b0cfb4f9112d29d">hwloc_cpuset_to_ith_ulong</a> (<a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set, int i)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Convert the <code>i</code> -th subset of CPU set <code>set</code> into unsigned long mask.  <a href="group__hwlocality__cpuset.php#ga15761bb808fef3477b0cfb4f9112d29d"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga212f2df54a64817dd094550a51b32c4f">hwloc_cpuset_cpu</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, unsigned cpu)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Clear CPU set <code>set</code> and set CPU <code>cpu</code>.  <a href="group__hwlocality__cpuset.php#ga212f2df54a64817dd094550a51b32c4f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gaddd96b6d8b7d11e0891c7416e5a68598">hwloc_cpuset_all_but_cpu</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, unsigned cpu)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Clear CPU set <code>set</code> and set all but the CPU <code>cpu</code>.  <a href="group__hwlocality__cpuset.php#gaddd96b6d8b7d11e0891c7416e5a68598"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gac5ba8c6d6367436995f67dbd4b3ba1de">hwloc_cpuset_set</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, unsigned cpu)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Add CPU <code>cpu</code> in CPU set <code>set</code>.  <a href="group__hwlocality__cpuset.php#gac5ba8c6d6367436995f67dbd4b3ba1de"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga9bcf94a6a5c877071116ff2f4a395956">hwloc_cpuset_set_range</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, unsigned begincpu, unsigned endcpu)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Add CPUs from <code>begincpu</code> to <code>endcpu</code> in CPU set <code>set</code>.  <a href="group__hwlocality__cpuset.php#ga9bcf94a6a5c877071116ff2f4a395956"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga9ae6610a008402bf7959234bd2044a82">hwloc_cpuset_clr</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, unsigned cpu)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Remove CPU <code>cpu</code> from CPU set <code>set</code>.  <a href="group__hwlocality__cpuset.php#ga9ae6610a008402bf7959234bd2044a82"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga0632cf820ffa41df6f64dcd14fd0d541">hwloc_cpuset_isset</a> (<a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set, unsigned cpu)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Test whether CPU <code>cpu</code> is part of set <code>set</code>.  <a href="group__hwlocality__cpuset.php#ga0632cf820ffa41df6f64dcd14fd0d541"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga0c2a23ccf879c9e640a3a407bed94090">hwloc_cpuset_iszero</a> (<a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Test whether set <code>set</code> is zero.  <a href="group__hwlocality__cpuset.php#ga0c2a23ccf879c9e640a3a407bed94090"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gac89f1c227a367732eabaaa48f8227355">hwloc_cpuset_isfull</a> (<a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Test whether set <code>set</code> is full.  <a href="group__hwlocality__cpuset.php#gac89f1c227a367732eabaaa48f8227355"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga817f53201f0c04b12db42c562cd64993">hwloc_cpuset_isequal</a> (<a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set1, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set2)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Test whether set <code>set1</code> is equal to set <code>set2</code>.  <a href="group__hwlocality__cpuset.php#ga817f53201f0c04b12db42c562cd64993"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga7f9ed2d6373d6c1b4f697b4c14ff1dc4">hwloc_cpuset_intersects</a> (<a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set1, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set2)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Test whether sets <code>set1</code> and <code>set2</code> intersects.  <a href="group__hwlocality__cpuset.php#ga7f9ed2d6373d6c1b4f697b4c14ff1dc4"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga59a0cb0bbe3b32945768a06264891035">hwloc_cpuset_isincluded</a> (<a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> sub_set, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> super_set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Test whether set <code>sub_set</code> is part of set <code>super_set</code>.  <a href="group__hwlocality__cpuset.php#ga59a0cb0bbe3b32945768a06264891035"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gaae983503932659b0c4142716201d8f40">hwloc_cpuset_orset</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> modifier_set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Or set <code>modifier_set</code> into set <code>set</code>.  <a href="group__hwlocality__cpuset.php#gaae983503932659b0c4142716201d8f40"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga79ccfa8ee2a2f76be5076297ba7e4182">hwloc_cpuset_andset</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> modifier_set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">And set <code>modifier_set</code> into set <code>set</code>.  <a href="group__hwlocality__cpuset.php#ga79ccfa8ee2a2f76be5076297ba7e4182"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gad9de58dc5695a3ab4ae12d571ea7f29f">hwloc_cpuset_clearset</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> modifier_set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Clear set <code>modifier_set</code> out of set <code>set</code>.  <a href="group__hwlocality__cpuset.php#gad9de58dc5695a3ab4ae12d571ea7f29f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gaec9d3e361521741e8e67e127b2f62089">hwloc_cpuset_xorset</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> modifier_set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Xor set <code>set</code> with set <code>modifier_set</code>.  <a href="group__hwlocality__cpuset.php#gaec9d3e361521741e8e67e127b2f62089"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga9126cbb0970146e1b09df91efc11889b">hwloc_cpuset_first</a> (<a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Compute the first CPU (least significant bit) in CPU set <code>set</code>.  <a href="group__hwlocality__cpuset.php#ga9126cbb0970146e1b09df91efc11889b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga2a18b213d53e23342ebc5ec3fde508ba">hwloc_cpuset_last</a> (<a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Compute the last CPU (most significant bit) in CPU set <code>set</code>.  <a href="group__hwlocality__cpuset.php#ga2a18b213d53e23342ebc5ec3fde508ba"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga548a6620cce008fc5b1e2110d25135fe">hwloc_cpuset_singlify</a> (<a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Keep a single CPU among those set in CPU set <code>set</code>.  <a href="group__hwlocality__cpuset.php#ga548a6620cce008fc5b1e2110d25135fe"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gae6281c5c6c916db85a9860ed570d6a56">hwloc_cpuset_compar_first</a> (<a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set1, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set2)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Compar CPU sets <code>set1</code> and <code>set2</code> using their first set bit.  <a href="group__hwlocality__cpuset.php#gae6281c5c6c916db85a9860ed570d6a56"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#ga65b27f4710b7d2a2a6568cf3e2cb6d3b">hwloc_cpuset_compar</a> (<a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set1, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set2)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Compar CPU sets <code>set1</code> and <code>set2</code> using their last bits.  <a href="group__hwlocality__cpuset.php#ga65b27f4710b7d2a2a6568cf3e2cb6d3b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cpuset.php#gad8604bd7111c2b4db14e02c16204d88d">hwloc_cpuset_weight</a> (<a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Compute the weight of CPU set <code>set</code>.  <a href="group__hwlocality__cpuset.php#gad8604bd7111c2b4db14e02c16204d88d"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>The Cpuset API, for use in hwloc itself. </p>
</div>
<?php
include_once("$topdir/includes/footer.inc");
