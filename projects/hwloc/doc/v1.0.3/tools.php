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
<!-- Generated by Doxygen 1.7.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li class="current"><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="headertitle">
<h1>Command-line tools </h1>  </div>
</div>
<div class="contents">
<p>hwloc comes with an extensive C programming interface and several command line utilities. Each of them is fully documented in its own manual page; the following is a summary of the available command line tools.</p>
<h2><a class="anchor" id="cli_lstopo"></a>
lstopo</h2>
<p>lstopo (also known as hwloc-info and hwloc-ls) displays the hierarchical topology map of the current system. The output may be graphical or textual, and can also be exported to numerous file formats such as PDF, PNG, XML, and others.</p>
<p>Note that lstopo can read XML files and/or alternate chroot filesystems and display topological maps representing those systems (e.g., use lstopo to output an XML file on one system, and then use lstopo to read in that XML file and display it on a different system).</p>
<h2><a class="anchor" id="cli_hwloc_bind"></a>
hwloc-bind</h2>
<p>hwloc-bind binds processes to specific hardware objects through a flexible syntax. A simple example is binding an executable to specific cores (or sockets or cpusets or ...). The hwloc-bind(1) man page provides much more detail on what is possible.</p>
<p>hwloc-bind can also be used to retrieve the current process' binding.</p>
<h2><a class="anchor" id="cli_hwloc_calc"></a>
hwloc-calc</h2>
<p>hwloc-calc is generally used to create cpuset strings to pass to hwloc-bind. Although hwloc-bind accepts many forms of object specification (i.e., cpuset strings are one of many forms that hwloc-bind understands), they can be useful, compact representations in shell scripts, for example.</p>
<p>hwloc-calc generates cpuset strings from given hardware objects with the ability to aggregate them, intersect them, and more. hwloc-calc generally uses the same syntax than hwloc-bind, but multiple instances may be composed to generate complex combinations.</p>
<p>Note that hwloc-calc can also generate lists of logical processors or NUMA nodes that are convenient to pass to some external tools such as taskset or numactl.</p>
<h2><a class="anchor" id="cli_hwloc_distrib"></a>
hwloc-distrib</h2>
<p>hwloc-distrib generates a set of cpuset strings that are uniformly distributed across the machine for the given number of processes. These strings may be used with hwloc-bind to run processes to maximize their memory bandwidth by properly distributing them across the machine. </p>
</div>
<?php
include_once("$topdir/includes/footer.inc");
