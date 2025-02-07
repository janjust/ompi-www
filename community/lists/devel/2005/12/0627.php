<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 19 18:37:22 2005" -->
<!-- isoreceived="20051219233722" -->
<!-- sent="Mon, 19 Dec 2005 12:05:05 -0500" -->
<!-- isosent="20051219170505" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  sm btl/signal 11 problem on Linux" -->
<!-- id="2649829B-85FF-483E-851B-BBE4AC64A2AB_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="557F6CC0-6E8E-4219-8BCD-9DF7C68DF87B_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-19 12:05:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0628.php">Paul H. Hargrove: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="0626.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>In reply to:</strong> <a href="0626.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0628.php">Paul H. Hargrove: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Reply:</strong> <a href="0628.php">Paul H. Hargrove: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yoinks.  Let me try to scrounge up an FC4 box to reproduce this on.   
<br>
If it really is an -O problem, this segv may just be the symptom, not  
<br>
the cause (seems likely, because mca_rsh_pls_component is a  
<br>
statically-defined variable -- accessing a member on it should  
<br>
definitely not cause a segv).  :-(
<br>
<p><p>On Dec 18, 2005, at 12:11 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Sure seems like it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) p *mca_pls_rsh_component.argv_at_4
</span><br>
<span class="quotelev1">&gt; $12 = {0x90e0428 &quot;ssh&quot;, 0x90e0438 &quot;-x&quot;, 0x0, 0x11 &lt;Address 0x11 out
</span><br>
<span class="quotelev1">&gt; of bounds&gt;}
</span><br>
<span class="quotelev1">&gt; (gdb) p mca_pls_rsh_component.argc
</span><br>
<span class="quotelev1">&gt; $13 = 2
</span><br>
<span class="quotelev1">&gt; (gdb) p local_exec_index
</span><br>
<span class="quotelev1">&gt; $14 = 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 18, 2005, at 4:56 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Greg,
</span><br>
<span class="quotelev2">&gt;&gt; I don't know, whether it's segfaulting at that particular line, but
</span><br>
<span class="quotelev2">&gt;&gt; could You
</span><br>
<span class="quotelev2">&gt;&gt; please print the  argv, since I guess, that might be the
</span><br>
<span class="quotelev2">&gt;&gt; local_exec_index
</span><br>
<span class="quotelev2">&gt;&gt; into the argv being wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rainer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Saturday 17 December 2005 19:16, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the stacktrace:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00ae1fe8 in orte_pls_rsh_launch (jobid=1) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pls_rsh_module.c:714
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 714                         if (mca_pls_rsh_component.debug) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00ae1fe8 in orte_pls_rsh_launch (jobid=1) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pls_rsh_module.c:714
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x00a29642 in orte_rmgr_urm_spawn ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     from /usr/local/ompi/lib/openmpi/mca_rmgr_urm.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x0804a0d4 in orterun (argc=4, argv=0xbff88594) at orterun.c:373
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x08049b16 in main (argc=4, argv=0xbff88594) at main.c:13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And the contents of mca_pls_rsh_component:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) p mca_pls_rsh_component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $2 = {super = {pls_version = {mca_major_version = 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_minor_version = 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mca_release_version = 0, mca_type_name = &quot;pls&quot;, '\0' &lt;repeats
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 28 times&gt;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mca_type_major_version = 1, mca_type_minor_version = 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mca_type_release_version = 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mca_component_name = &quot;rsh&quot;, '\0' &lt;repeats 60 times&gt;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mca_component_major_version = 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_component_minor_version = 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mca_component_release_version = 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mca_open_component = 0xae0a80 &lt;orte_pls_rsh_component_open&gt;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mca_close_component = 0xae09a0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;orte_pls_rsh_component_close&gt;},
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      pls_data = {mca_is_checkpointable = true},
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      pls_init = 0xae093c &lt;orte_pls_rsh_component_init&gt;}, debug =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; false,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    reap = true, assume_same_shell = true, delay = 1, priority = 10,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    argv = 0x90e0418, argc = 2, orted = 0x90de438 &quot;orted&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    path = 0x90e0960 &quot;/usr/bin/ssh&quot;, num_children = 0, num_concurrent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 128,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    lock = {super = {obj_class = 0x804ec38, obj_reference_count = 1},
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      m_lock_pthread = {__data = {__lock = 0, __count = 0, __owner
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          __kind = 0, __nusers = 0, __spins = 0},
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        __size = '\0' &lt;repeats 23 times&gt;, __align = 0}, m_lock_atomic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = {u = {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          lock = 0, sparc_lock = 0 '\0', padding = &quot;\000\000\000&quot;}}},
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cond = {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      super = {obj_class = 0x804ec18, obj_reference_count = 1},
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c_waiting = 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      c_signaled = 0, c_cond = {__data = {__lock = 0, __futex = 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          __total_seq = 0, __wakeup_seq = 0, __woken_seq = 0, __mutex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 0x0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          __nwaiters = 0, __broadcast_seq = 0},
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        __size = '\0' &lt;repeats 47 times&gt;, __align = 0}}}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't see why it is segfaulting at this particular line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 16, 2005, at 5:55 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 16, 2005, at 10:47 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I finally worked out why I couldn't reproduce the problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You're not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; going to like it though.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You're right -- this kind of buglet is among the most un-fun.  :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here's the stacktracefrom the core file:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #0  0x00e93fe8 in orte_pls_rsh_launch ()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     from /usr/local/ompi/lib/openmpi/mca_pls_rsh.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #1  0x0023c642 in orte_rmgr_urm_spawn ()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     from /usr/local/ompi/lib/openmpi/mca_rmgr_urm.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #2  0x0804a0d4 in orterun (argc=5, argv=0xbfab2e84) at orterun.c:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 373
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #3  0x08049b16 in main (argc=5, argv=0xbfab2e84) at main.c:13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you recompile this one file with -g?  Specifically, cd into the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/mca/pla/rsh dir and &quot;make clean&quot;.  Then &quot;make&quot;.  Then cut-n-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; paste the compile line for that one file to a shell prompt, and put
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in a -g.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then either re-install that component (it looks like you're doing a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dynamic build with separate components, so you can do &quot;make  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; install&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; right from the rsh dir) or re-link liborte and re-install that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and re-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run.  The corefile might give something a little more meaningful in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this case...?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Dipl.-Inf. Rainer Keller       email: keller_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   High Performance Computing     Tel: ++49 (0)711-685 5858
</span><br>
<span class="quotelev2">&gt;&gt;     Center Stuttgart (HLRS)        Fax: ++49 (0)711-678 7626
</span><br>
<span class="quotelev2">&gt;&gt;   POSTAL:Nobelstrasse 19             <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
</span><br>
<span class="quotelev2">&gt;&gt;   ACTUAL:Allmandring 30, R. O.030
</span><br>
<span class="quotelev2">&gt;&gt;   70550 Stuttgart
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0628.php">Paul H. Hargrove: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="0626.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>In reply to:</strong> <a href="0626.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0628.php">Paul H. Hargrove: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Reply:</strong> <a href="0628.php">Paul H. Hargrove: "Re:  sm btl/signal 11 problem on Linux"</a>
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
