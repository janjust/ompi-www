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
<!-- Generated by Doxygen 1.8.13 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
$(function() {
  initMenu('',false,false,'search.php','Search');
});
</script>
<div id="main-nav"></div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Network Locality (netloc) </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p> 
<div class="section">
</p>
<p>Portable abstraction of network topologies for high-performance computing.</p>
<p>The netloc documentation spans of these sections: </p><ul>
<li>
<a class="el" href="a00344.php">Network Locality (netloc)</a>, this section below  </li>
<li>
<a class="el" href="a00345.php">Netloc with Scotch</a>  </li>
</ul>
<p> 
</div><div class="section" id="netloc_summary">
 </p>
<h1><a class="anchor" id="netloc_summary"></a>
Netloc Summary</h1>
<p>The Portable Network Locality (netloc) software package provides network topology discovery tools, and an abstract representation of those networks topologies for a range of network types and configurations. It is provided as a companion to the Portable Hardware Locality (hwloc) package. These two software packages work together to provide a comprehensive view of the HPC system topology, spanning from the processor cores in one server to the cores in another - including the complex network(s) in between.</p>
<p>Towards this end, netloc is divided into two sets of components. The first tools are for the admin to extract the information about the topology of the machines with topology discovery tools for each network type and discovery technique (called readers). The second set of tools is for the user to exploit the collected information: to display the topology or create a topology-aware mapping of the processes of an application.</p>
<div class="image">
<img src="netloc_design.png" alt="netloc_design.png"/>
</div>
 <p> 
</div><div class="section" id="supportednetworks">
 </p>
<h2><a class="anchor" id="supportednetworks"></a>
Supported Networks</h2>
<p>For now, only InfiniBand (See <a class="el" href="a00344.php#netloc_setup">Setup</a>) is supported, but it is planned to be extended it very soon.</p>
<p> 
</div><div class="section" id="netloc_installation">
 </p>
<h1><a class="anchor" id="netloc_installation"></a>
Netloc Installation</h1>
<p>The generic installation procedure for both hwloc and netloc is described in <a class="el" href="index.php#common_installation">Installation</a>.</p>
<p>Note that netloc is currently not supported on as many platforms as the original hwloc project. netloc is enabled by default when supported, or can be disabled by passing <code>--disable-netloc</code> to the configure command-line.</p>
<p> 
</div><div class="section" id="netloc_setup">
 </p>
<h1><a class="anchor" id="netloc_setup"></a>
Setup</h1>
<p>To use Netloc tools, we need two steps. The first step consists in getting information about network directly from tools distributed by manufacturers. For Infiniband, for instance, this operation needs privileges to access to the network device. For this step we have wrappers in Netloc that will call the right tools with the right options.</p>
<p>The second step will transform the raw files generated by manufacturer tools, into files in a format readable by Netloc tools, and that will not depend on network technologies.</p>
<p>To be clear, let's take an example with Infiniband. This first step is handled by <code>netloc_ib_gather_raw</code> that will call <code>ibnetdiscover</code> and <code>ibroutes</code> tools to generate the necessary raw data files. The step has to be run by an administrator, since the Infiniband tools need to access to the network device.</p>
<pre class="fragment">shell$ netloc_ib_gather_raw --help
Usage: netloc_ib_gather_raw [options] &lt;outdir&gt;
  Dumps topology information to &lt;outdir&gt;/ib-raw/
  Subnets are guessed from the &lt;outdir&gt;/hwloc/ directory where
  the hwloc XML exports of some nodes are stored.
Options:
 --sudo
    Pass sudo to internal ibnetdiscover and ibroute invocations.
    Useful when the entire script cannot run as root.
 --hwloc-dir &lt;dir&gt;
    Use &lt;dir&gt; instead of &lt;outdir&gt;/hwloc/ for hwloc XML exports.
 --force-subnet [&lt;subnet&gt;:]&lt;board&gt;:&lt;port&gt; to force the discovery
    Do not guess subnets from hwloc XML exports.
    Force discovery on local board &lt;board&gt; port &lt;port&gt;
    and optionally force the subnet id &lt;subnet&gt;
    instead of reading it from the first GID.
    Examples: --force-subnet mlx4_0:1
              --force-subnet fe80:0000:0000:0000:mlx4_0:1
 --ibnetdiscover /path/to/ibnetdiscover
 --ibroute /path/to/ibroute
    Specify exact location of programs. Default is /usr/bin/&lt;program&gt;
 --sleep &lt;n&gt;
    Sleep for &lt;n&gt; seconds between invocations of programs probing the network
 --ignore-errors
    Ignore errors from ibnetdiscover and ibroute, assume their outputs are ok
 --force -f
    Always rediscover to overwrite existing files without asking
 --verbose -v
    Add verbose messages
 --dry-run
    Do not actually run programs or modify anything
 --help -h
    Show this help

shell$ ./netloc_ib_gather_raw /home/netloc/data
WARNING: Not running as root.
Using /home/netloc/data/hwloc as hwloc lstopo XML directory.

Exporting local node hwloc XML...
  Running lstopo-no-graphics...

Found 1 subnets in hwloc directory:
 Subnet fe80:0000:0000:0000 is locally accessible from board qib0 port 1.

Looking at fe80:0000:0000:0000 (through local board qib0 port 1)...
 Running ibnetdiscover...
 Getting routes...
  Running ibroute for switch 'QLogic 12800-180 GUID=0x00066a00e8001310 L112' LID 18...
  Running ibroute for switch 'QLogic 12800-180 GUID=0x00066a00e8001310 L108' LID 20...
  Running ibroute for switch 'QLogic 12800-180 GUID=0x00066a00e8001310 L102' LID 23...
  Running ibroute for switch 'QLogic 12800-180 GUID=0x00066a00e8001310 L104' LID 25...
  Running ibroute for switch 'QLogic 12800-180 GUID=0x00066a00e8001310 L106' LID 24...
  Running ibroute for switch 'QLogic 12800-180 GUID=0x00066a00e8001310 L114' LID 22...
  Running ibroute for switch 'QLogic 12800-180 GUID=0x00066a00e8001310 L116' LID 21...
  Running ibroute for switch 'QLogic 12800-180 GUID=0x00066a00e8001310 L109' LID 12...
  Running ibroute for switch 'QLogic 12800-180 GUID=0x00066a00e8001310 L111' LID 11...
  Running ibroute for switch 'QLogic 12800-180 GUID=0x00066a00e8001310 L107' LID 13...
  Running ibroute for switch 'QLogic 12800-180 GUID=0x00066a00e8001310 L103' LID 17...
  Running ibroute for switch 'QLogic 12800-180 GUID=0x00066a00e8001310 L105' LID 16...
  Running ibroute for switch 'QLogic 12800-180 GUID=0x00066a00e8001310 L113' LID 15...
</pre><p>The second step, that can be done by a regular user, is done by the tool <code>netloc_ib_extract_dats</code>.</p>
<pre class="fragment">shell$ netloc_ib_extract_dats --help
Usage: netloc_ib_extract_dats &lt;path to input raw data files&gt; &lt;output path&gt; [--hwloc-dir
&lt;hwloc xml path&gt;]
        hwloc-dir can be an absolute path or a relative path from output path

shell$ netloc_ib_extract_dats /home/netloc/data/ib-raw /home/netloc/data/netloc \
  --hwloc-dir ../hwloc
Read subnet: fe80:0000:0000:0000
2 partitions found
        'node'
        'admin'
</pre><p> 
</div><div class="section" id="netloc_draw">
 </p>
<h1><a class="anchor" id="netloc_draw"></a>
Topology display</h1>
<p>Netloc provides a tool, <code>netloc_draw.html</code>, that displays a topology in a web browser, by using a JSON file.</p>
<h2><a class="anchor" id="netloc_draw_setup"></a>
Generate the JSON file</h2>
<p>In order to display a topology, Netloc needs to generate a JSON file corresponding to a topology. For this operation, the user must run <code>netloc_draw_to_json</code>.</p>
<pre class="fragment">shell$ netloc_draw_to_json --help
Usage: netloc_draw_to_json &lt;path to topology directory&gt;

shell$ netloc_draw_to_json /home/netloc/data/netloc
</pre><p>The <code>netloc_draw_to_json</code> command will write a JSON file for each topology file found in the input directory. The output files, written also in the input directory, can be open by <code>netloc_draw.html</code> in a web browser.</p>
<h2><a class="anchor" id="netloc_draw_tool"></a>
Using netloc_draw</h2>
<p>Once the JSON file is opened, the rendering is generated by the Javascript vis library for computing the position of the nodes. From the interface, it is possible to search for a specific node, to color the nodes, to expand merged switches, to show statistics, to export as an image... The user can interact with the nodes by moving them. For now, there are bugs and other nodes might move too.</p>
<p>The placement of the nodes is done statically if the topology is detected as a tree. If not, vis.js will use physics to find good positions, and it can be very time consuming.</p>
<div class="image">
<img src="netloc_draw.png" alt="netloc_draw.png"/>
</div>
  </div></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
