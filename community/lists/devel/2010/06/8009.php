<?
$subject_val = "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  1 13:11:20 2010" -->
<!-- isoreceived="20100601171120" -->
<!-- sent="Tue, 1 Jun 2010 11:11:15 -0600" -->
<!-- isosent="20100601171115" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: System V Shared Memory for Open MPI" -->
<!-- id="FC87E778-C8F0-45D2-896E-5A2915700E86_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4399A616-0BA6-47A7-B614-70380CFBFFA4_at_lanl.gov" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI devel] RFC: System V Shared Memory for Open MPI<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-01 13:11:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8010.php">Graham, Richard L.: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8008.php">Samuel K. Gutierrez: "[OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8008.php">Samuel K. Gutierrez: "[OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8015.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8015.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doh!
<br>
<p>bitbucket repository: <a href="http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm">http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm</a>
<br>
<p>Thanks,
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Jun 1, 2010, at 11:08 AM, Samuel K. Gutierrez wrote:
&gt; WHAT: New System V shared memory component.
&gt;
&gt; WHY: <a href="https://svn.open-mpi.org/trac/ompi/ticket/1320">https://svn.open-mpi.org/trac/ompi/ticket/1320</a>
&gt;
&gt; WHERE:
&gt; M      ompi/mca/btl/sm/btl_sm.c
&gt; M      ompi/mca/btl/sm/btl_sm_component.c
&gt; M      ompi/mca/btl/sm/btl_sm.h
&gt; M      ompi/mca/mpool/sm/mpool_sm_component.c
&gt; M      ompi/mca/mpool/sm/mpool_sm.h
&gt; M      ompi/mca/mpool/sm/mpool_sm_module.c
&gt; A      ompi/mca/common/sm/configure.m4
&gt; A      ompi/mca/common/sm/common_sm_sysv.h
&gt; A      ompi/mca/common/sm/common_sm_windows.c
&gt; A      ompi/mca/common/sm/common_sm_windows.h
&gt; A      ompi/mca/common/sm/common_sm.c
&gt; A      ompi/mca/common/sm/common_sm_sysv.c
&gt; A      ompi/mca/common/sm/common_sm.h
&gt; M      ompi/mca/common/sm/common_sm_mmap.c
&gt; M      ompi/mca/common/sm/common_sm_mmap.h
&gt; M      ompi/mca/common/sm/Makefile.am
&gt; M      ompi/mca/common/sm/help-mpi-common-sm.txt
&gt; M      ompi/mca/coll/sm/coll_sm_module.c
&gt; M      ompi/mca/coll/sm/coll_sm.h
&gt;
&gt; WHEN: Upon acceptance.
&gt;
&gt; TIMEOUT: Tuesday, June 8, 2010 (after devel concall).
&gt;
&gt; HOW:
&gt; MCA mpi: parameter &quot;mpi_common_sm&quot; (current value: &lt;mmap&gt;,
&gt;                          data source: default value)
&gt;                          Which shared memory support will be used.  
&gt; Valid
&gt;                          values: sysv,mmap - or a comma delimited  
&gt; combination
&gt;                          of them (order dependent).  The first  
&gt; component that
&gt;                          is successfully selected is used.
&gt;
&gt; Thanks!
&gt;
&gt; --
&gt; Samuel K. Gutierrez
&gt; Los Alamos National Laboratory
&gt;
&gt;
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8010.php">Graham, Richard L.: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8008.php">Samuel K. Gutierrez: "[OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8008.php">Samuel K. Gutierrez: "[OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8015.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8015.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
