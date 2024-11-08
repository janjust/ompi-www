<?
$subject_val = "Re: [OMPI devel] oshmem examples cannot be built";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 13 19:34:44 2015" -->
<!-- isoreceived="20150913233444" -->
<!-- sent="Sun, 13 Sep 2015 23:34:41 +0000" -->
<!-- isosent="20150913233441" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem examples cannot be built" -->
<!-- id="DB0C348F-268C-483E-A219-45FBA107EB90_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAvDA17TLmjUgdhM_BgqyLDPWxP81y6VUhrb1qRPWMCpgufCrA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem examples cannot be built<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-13 19:34:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18031.php">Gilles Gouaillardet: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Previous message:</strong> <a href="18029.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>In reply to:</strong> <a href="18027.php">Paul Hargrove: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18032.php">Igor: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Reply:</strong> <a href="18032.php">Igor: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I actually tested manually before I replied -- I did a &quot;make&quot; in the examples dir, and it used shmemcc.  So something went wonky in Ralph's build for some reason...?
<br>

<br>

<br>
<span class="quotelev1">&gt; On Sep 12, 2015, at 11:52 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another FYI.
</span><br>
<span class="quotelev1">&gt; In my Aug 26 build of master (openmpi-dev-2371-gea935df.tar.bz2) running &quot;make&quot; in the examples directory *did* use shmemcc:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u2/BLD/examples'
</span><br>
<span class="quotelev1">&gt; shmemcc -g ring_oshmem_c.c -o ring_oshmem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, something has changed if mpicc is being used today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Sep 12, 2015 at 5:58 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Sep 11, 2015, at 9:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW: shemcc is just a symlink to mpicc, and I don&#226;&#128;&#153;t see any -loshmem in that &#226;&#128;&#148;showme output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ shmemcc --showme
</span><br>
<span class="quotelev1">&gt; gcc -I/home/jsquyres/bogus/include -pthread -Wl,-rpath -Wl,/home/jsquyres/bogus/lib -Wl,--enable-new-dtags -L/home/jsquyres/bogus/lib -loshmem -lmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The actual argv[0] of the executable should be determining which data file is used to populate the underlying argv.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Probably best to open a github issue on this and assign to the OSHMEM devs to figure out what is going on here...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Sep 11, 2015, at 5:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I typed &#226;&#128;&#156;make&#226;&#128;&#157; - the Makefile determines what to call. I suspect it isn&#226;&#128;&#153;t calling the right thing
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Sep 11, 2015, at 4:17 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Shouldn't you be using shmemcc, not mpicc?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Sep 11, 2015, at 7:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On current master:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 03:57:56  (topic/pmix) /home/common/openmpi/foobar/examples$ make ring_oshmem_c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mpicc -g    ring_oshmem_c.c   -o ring_oshmem_c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /tmp/ccfqcVje.o: In function `main':
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:20: undefined reference to `start_pes'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:21: undefined reference to `_my_pe'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:22: undefined reference to `_num_pes'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:32: undefined reference to `shmem_int_put'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:44: undefined reference to `shmem_int_wait_until'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:49: undefined reference to `shmem_int_put'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make: *** [ring_oshmem_c] Error 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 03:58:51  (topic/pmix) /home/common/openmpi/foobar/examples$ mpicc --showme
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; gcc -I/home/common/openmpi/build/foobar/include/openmpi -I/home/common/openmpi/build/foobar/include/openmpi/opal/mca/hwloc/hwloc1110/hwloc/include -I/home/common/openmpi/build/foobar/include/openmpi/opal/mca/event/libevent2022/libevent -I/home/common/openmpi/build/foobar/include/openmpi/opal/mca/event/libevent2022/libevent/include -I/home/common/openmpi/build/foobar/include -pthread -Wl,-rpath -Wl,/home/common/openmpi/build/foobar/lib -Wl,--enable-new-dtags -L/home/common/openmpi/build/foobar/lib -lmpi
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 03:59:12  (topic/pmix) /home/common/openmpi/foobar/examples$
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; None of the oshmem examples can be built - all fail with the same error. My configure:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_orterun_prefix_by_default=yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_mpi_thread_multiple=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_mem_debug=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_mem_profile=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_debug_symbols=yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_binaries=yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_heterogeneous=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_picky=yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_debug=yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_shared=yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_static=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_memchecker=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_ipv6=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_mpi_fortran=yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_mpi_cxx=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_mpi_cxx_seek=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_cxx_exceptions=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_mpi_java=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_io_romio=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; enable_contrib_no_build=libnbc
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; with_memory_manager=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; with_tm=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; with_devel_headers=yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; with_portals=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; with_valgrind=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; if [ -n &quot;$SLURMHOME&quot; ] ; then
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  with_slurm=$SLURMHOME
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  with_pmi=$SLURMHOME
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; else
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  with_slurm=no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; fi
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18010.php">http://www.open-mpi.org/community/lists/devel/2015/09/18010.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18011.php">http://www.open-mpi.org/community/lists/devel/2015/09/18011.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18014.php">http://www.open-mpi.org/community/lists/devel/2015/09/18014.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18017.php">http://www.open-mpi.org/community/lists/devel/2015/09/18017.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18027.php">http://www.open-mpi.org/community/lists/devel/2015/09/18027.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18031.php">Gilles Gouaillardet: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Previous message:</strong> <a href="18029.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>In reply to:</strong> <a href="18027.php">Paul Hargrove: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18032.php">Igor: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Reply:</strong> <a href="18032.php">Igor: "Re: [OMPI devel] oshmem examples cannot be built"</a>
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
