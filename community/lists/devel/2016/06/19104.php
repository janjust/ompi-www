<?
$subject_val = "Re: [OMPI devel] Open MPI v2.0.0rc3 now available";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 21:13:52 2016" -->
<!-- isoreceived="20160616011352" -->
<!-- sent="Wed, 15 Jun 2016 18:13:43 -0700" -->
<!-- isosent="20160616011343" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v2.0.0rc3 now available" -->
<!-- id="CAAvDA14ksd=wGLiGvDuMCB+LZhb0LOyW93LLf_ROTQ94g_ebLQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj5vFsbmQRn+XQHfHbznhdGT-2n5hJ41j6SNGWBOitHScw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI v2.0.0rc3 now available<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 21:13:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19105.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<li><strong>Previous message:</strong> <a href="19103.php">Howard Pritchard: "[OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<li><strong>In reply to:</strong> <a href="19103.php">Howard Pritchard: "[OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19115.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<li><strong>Reply:</strong> <a href="19115.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With a PPC64/Fedora20/gcc-4.8.3 system configuring for &quot;-m32&quot;:
<br>
<p>configure --prefix=[...] --enable-debug \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=-m32 --with-wrapper-cflags=-m32 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CXXFLAGS=-m32 --with-wrapper-cxxflags=-m32 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FCFLAGS=-m32 --with-wrapper-fcflags=-m32 --disable-mpi-fortran
<br>
<p>Build fails with
<br>
/bin/sh ../../../libtool  --tag=CC   --mode=link gcc -std=gnu99  -m32 -g
<br>
-finline-functions -fno-strict-aliasing -pthread   -o opal_wrapper
<br>
opal_wrapper.o ../../../opal/libopen-pal.la -lrt -lm -lutil
<br>
libtool: link: gcc -std=gnu99 -m32 -g -finline-functions
<br>
-fno-strict-aliasing -pthread -o .libs/opal_wrapper opal_wrapper.o
<br>
&nbsp;../../../opal/.libs/libopen-pal.so -ldl -lrt -lm -lutil -pthread
<br>
-Wl,-rpath -Wl,/home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc32-gcc/INST/lib
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to
<br>
`OPAL_THREAD_ADD64'
<br>
collect2: error: ld returned 1 exit status
<br>
<p>-Paul
<br>
<p>On Wed, Jun 15, 2016 at 3:19 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; We are now feature complete for v2.0.0 and would appreciate testing by
</span><br>
<span class="quotelev1">&gt; developers and end users before we finalize the v2.0.0 release.  In that
</span><br>
<span class="quotelev1">&gt; light, v2.0.0rc3 is now available:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://www.open-mpi.org/software/ompi/v2.x/">https://www.open-mpi.org/software/ompi/v2.x/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are the changes since 2.0.0rc2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The MPI C++ bindings -- which were removed from the MPI standard in
</span><br>
<span class="quotelev1">&gt;    v3.0 -- are no longer built by default and will be removed in some
</span><br>
<span class="quotelev1">&gt;    future version of Open MPI.  Use the --enable-mpi-cxx-bindings
</span><br>
<span class="quotelev1">&gt;    configure option to build the deprecated/removed MPI C++ bindings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --&gt; NOTE: this is not new, actually -- but we just added it to the NEWS
</span><br>
<span class="quotelev1">&gt; file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - In environments where mpirun cannot automatically determine the
</span><br>
<span class="quotelev1">&gt;   number of slots available (e.g., when using a hostfile that does not
</span><br>
<span class="quotelev1">&gt;   specify &quot;slots&quot;, or when using --host without specifying a &quot;:N&quot;
</span><br>
<span class="quotelev1">&gt;   suffix to hostnames), mpirun now requires the use of &quot;-np N&quot; to
</span><br>
<span class="quotelev1">&gt;   specify how many MPI processes to launch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Many updates and fixes to the revamped memory hooks infrastructure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Various configure-related compatibility updates for newer versions
</span><br>
<span class="quotelev1">&gt;    of libibverbs and OFED.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Properly detect Intel TrueScale and OmniPath devices in the ACTIVE
</span><br>
<span class="quotelev1">&gt;   state.  Thanks to Durga Choudhury for reporting the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Fix MPI_IREDUCE_SCATTER_BLOCK for a one-process communicator. Thanks
</span><br>
<span class="quotelev1">&gt;    to Lisandro Dalcin for reporting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Fix detection and use of Solaris Studio 12.5 (beta) compilers.
</span><br>
<span class="quotelev1">&gt;    Thanks to Paul Hargrove for reporting and debugging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Allow NULL arrays when creating empty MPI datatypes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Miscellaneous minor bug fixes in the hcoll component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Miscellaneous minor bug fixes in the ugni component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Fix various small memory leaks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Notable new MCA parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    -  opal_progress_lp_call_ration: Control how often low-priority
</span><br>
<span class="quotelev1">&gt;       callbacks are made during Open MPI's main progress loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Disable backtrace support by default in the PSM/PSM2 libraries to
</span><br>
<span class="quotelev1">&gt;   prevent unintentional conflicting behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard Pritchard
</span><br>
<span class="quotelev1">&gt; HPC-DES
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19103.php">http://www.open-mpi.org/community/lists/devel/2016/06/19103.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19104/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19105.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<li><strong>Previous message:</strong> <a href="19103.php">Howard Pritchard: "[OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<li><strong>In reply to:</strong> <a href="19103.php">Howard Pritchard: "[OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19115.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<li><strong>Reply:</strong> <a href="19115.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
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
