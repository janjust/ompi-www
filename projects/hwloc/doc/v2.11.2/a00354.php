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
<div><div class="header">
  <div class="headertitle"><div class="title">Synthetic topologies</div></div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p>hwloc may load fake or remote topologies so as to consult them without having the underlying hardware available. Aside from loading XML topologies, hwloc also enables the building of <em>synthetic</em> topologies that are described by a single string listing the arity of each levels.</p>
<p>For instance, lstopo may create a topology made of 2 packages, containing a single NUMA node and a L2 cache above two single-threaded cores:</p>
<pre class="fragment">$ lstopo -i "pack:2 node:1 l2:1 core:2 pu:1" -
Machine (2048MB)
  Package L#0
    NUMANode L#0 (P#0 1024MB)
    L2 L#0 (4096KB)
      Core L#0 + PU L#0 (P#0)
      Core L#1 + PU L#1 (P#1)
  Package L#1
    NUMANode L#1 (P#1 1024MB)
    L2 L#1 (4096KB)
      Core L#2 + PU L#2 (P#2)
      Core L#3 + PU L#3 (P#3)
</pre><p>Replacing <code>-</code> with <code>file.xml</code> in this command line will export this topology to XML as usual.</p>
<dl class="section note"><dt>Note</dt><dd>Synthetic topologies offer a very basic way to export a topology and reimport it on another machine. It is a lot less precise than XML but may still be enough when only the hierarchy of resources matters.</dd></dl>
<h1><a class="anchor" id="synthetic_string"></a>
Synthetic description string</h1>
<p>Each item in the description string gives the type of the level and the number of such children under each object of the previous level. That is why the above topology contains 4 cores (2 cores times 2 nodes).</p>
<p>These type names must be written as <code>numanode</code>, <code>package</code>, <code>core</code>, <code>l2u</code>, <code>l1i</code>, <code>pu</code>, <code>group</code> (hwloc_obj_type_sscanf() is used for parsing the type names). They do not need to be written case-sensitively, nor entirely (as long as there is no ambiguity, 2 characters such as <code>ma</code> select a Machine level). Note that I/O and Misc objects are not available.</p>
<p>Instead of specifying the type of each level, it is possible to just specify the arities and let hwloc choose all types according to usual topologies. The following examples are therefore equivalent: </p><pre class="fragment">$ lstopo -i "2 3 4 5 6"
$ lstopo -i "Package:2 NUMANode:3 L2Cache:4 Core:5 PU:6"
</pre><p>NUMA nodes are handled in a special way since they are not part of the main CPU hierarchy but rather attached below it as memory children. Thus, <code>NUMANode:3</code> actually means <code>Group:3</code> where one NUMA node is attached below each group. These groups are merged back into the parent when possible (typically when a single NUMA node is requested below each parent).</p>
<p>It is also possible the explicitly attach NUMA nodes to specific levels. For instance, a topology similar to a Intel Xeon Phi processor (with 2 NUMA nodes per 16-core group) may be created with: </p><pre class="fragment">$ lstopo -i "package:1 group:4 [numa] [numa] core:16 pu:4"
</pre><p>The root object does not appear in the synthetic description string since it is always a Machine object. Therefore the Machine type is disallowed in the description as well.</p>
<p>A NUMA level (with a single NUMA node) is automatically added if needed.</p>
<p>Each item may be followed parentheses containing a list of space-separated attributes. For instance: </p><ul>
<li>
<code>L2iCache:2(size=32kB)</code> specifies 2 children of 32kB level-2 instruction caches. The size may be specified in bytes (without any unit suffix) or as kB, KiB, MB, MiB, etc.  </li>
<li>
<code>NUMANode:3(memory=16MB)</code> specifies 3 NUMA nodes with 16MB each. The size may be specified in bytes (without any unit suffix) or as GB, GiB, TB, TiB, etc.  </li>
<li>
<code>PU:2(indexes=0,2,1,3)</code> specifies 2 PU children and the full list of OS indexes among the entire set of 4 PU objects.  </li>
<li>
<code>PU:2(indexes=numa:core)</code> specifies 2 PU children whose OS indexes are interleaved by NUMA node first and then by package.  </li>
<li>
Attributes in parentheses at the very beginning of the description apply to the root object.  </li>
</ul>
<p>hwloc command-line tools may modify a synthetic topology, for instance to customize object attributes, or to remove some objects to make the topology heterogeneous or asymmetric. See many examples in <a class="el" href="a00359.php#faq_create_asymmetric">How do I create a custom heterogeneous and asymmetric topology?</a>.</p>
<h1><a class="anchor" id="synthetic_use"></a>
Loading a synthetic topology</h1>
<p>Aside from lstopo, the hwloc programming interface offers the same ability by passing the synthetic description string to <a class="el" href="a00148.php#ga4fab186bb6181a00bcf585825fddd38d" title="Enable synthetic topology.">hwloc_topology_set_synthetic()</a> before <a class="el" href="a00142.php#gabdf58d87ad77f6615fccdfe0535ff826" title="Build the actual topology.">hwloc_topology_load()</a>.</p>
<p>Synthetic topologies are created by the <code>synthetic</code> component. This component may be enabled by force by setting the HWLOC_SYNTHETIC environment variable to something such as <code>node:2 core:3 pu:4</code>.</p>
<p>Loading a synthetic topology disables binding support since the topology usually does not match the underlying hardware. Binding may be reenabled as usual by setting HWLOC_THISSYSTEM=1 in the environment or by setting the <a class="el" href="a00149.php#ggada025d3ec20b4b420f8038d23d6e7bdea6ecb6abc6a0bb75e81564f8bca85783b" title="Assume that the selected backend provides the topology for the system on which we are running.">HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM</a> topology flag.</p>
<h1><a class="anchor" id="synthetic_export"></a>
Exporting a topology as a synthetic string</h1>
<p>The function <a class="el" href="a00163.php#ga24b7864a1c588309c4749f621f03b4c7" title="Export the topology as a synthetic string.">hwloc_topology_export_synthetic()</a> may export a topology as a synthetic string. It offers a convenient way to quickly describe the contents of a machine. The lstopo tool may also perform such an export by forcing the output format.</p>
<pre class="fragment">$ lstopo --of synthetic --no-io
Package:1 L3Cache:1 L2Cache:2 L1dCache:1 L1iCache:1 Core:1 PU:2
</pre><p>The exported string may be passed back to hwloc for recreating another similar topology (see also <a class="el" href="a00359.php#faq_version_synthetic">Are synthetic strings compatible between hwloc releases?</a>). The entire tree will be similar, but some attributes such as the processor model will be missing.</p>
<p>Such an export is only possible if the topology is totally symmetric. It means that the <code>symmetric_subtree</code> field of the root object is set. Also memory children should be attached in a symmetric way (e.g. the same number of memory children below each Package object, etc.). However, I/O devices and Misc objects are ignored when looking at symmetry and exporting the string. </p>
</div></div><!-- contents -->
</div><!-- PageDoc -->
<?php
include_once("$topdir/includes/footer.inc");
