<?
$subject_val = "Re: [OMPI users] OMPI seg fault by a class with weird address.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 12:14:03 2011" -->
<!-- isoreceived="20110316161403" -->
<!-- sent="Wed, 16 Mar 2011 10:13:57 -0600" -->
<!-- isosent="20110316161357" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI seg fault by a class with weird address." -->
<!-- id="SNT134-w4312D1AE2AAEFFDB555FB4CBCE0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="424B5A24-4D76-49C4-8160-A5DC84FE4FD1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI seg fault by a class with weird address.<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 12:13:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15885.php">Claudio Baeza Retamal: "[OMPI users] Issues in 1.4.3 version and system cpu usage"</a>
<li><strong>Previous message:</strong> <a href="15883.php">Brock Palen: "[OMPI users] MPI_AllReduce() deadlock on IB"</a>
<li><strong>In reply to:</strong> <a href="15876.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15886.php">Jeff Squyres: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Reply:</strong> <a href="15886.php">Jeff Squyres: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Although I do not think that Valgrind supports mpic++, I have tried to run it. 
<br>
This is what I got, thanks------------------------------------------------------------==18729== Memcheck, a memory error detector==18729== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.==18729== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info==18729== Command: ./nsga2b==18729== Parent PID: 18726==18729==--18729----18729-- Valgrind options:--18729--    --tool=memcheck--18729--    --error-limit=no--18729--    --leak-check=full--18729--    --log-file=nsga2b_valg.log--18729--    -v--18729-- Contents of /proc/version:--18729--   Linux version 2.6.18-128.1.1.el5.530g0000 (root_at_kalamata) (gcc version 4.1.2 20071124 (Red Hat 4.1.2-42)) #1 SMP Tue Mar 17 21:49:24 EDT 2009--18729-- Arch and hwcaps: AMD64, amd64-sse3-cx16--18729-- Page sizes: currently 4096, max supported 4096--18729-- Valgrind library directory: /usr/lib64/valgrind--18729-- Reading syms from /lustre/nsga2b (0x400000)--18729-- warning: DiCfSI 0x0 .. 0x0 outside segment 0x4438f0 .. 0xd81e77--18729-- warning: DiCfSI 0x1 .. 0x3 outside segment 0x4438f0 .. 0xd81e77--18729-- warning: DiCfSI 0x4 .. 0x2a outside segment 0x4438f0 .. 0xd81e77--18729-- warning: DiCfSI 0x0 .. 0x0 outside segment 0x4438f0 .. 0xd81e77--18729-- warning: DiCfSI 0x1 .. 0x3 outside segment 0x4438f0 .. 0xd81e77--18729-- warning: DiCfSI 0x4 .. 0x2a outside segment 0x4438f0 .. 0xd81e77--18729-- warning: DiCfSI 0x0 .. 0x0 outside segment 0x4438f0 .. 0xd81e77--18729-- warning: DiCfSI 0x1 .. 0x3 outside segment 0x4438f0 .. 0xd81e77--18729-- warning: DiCfSI 0x4 .. 0xb outside segment 0x4438f0 .. 0xd81e77--18729-- warning: DiCfSI 0xc .. 0xaa outside segment 0x4438f0 .. 0xd81e77--18729-- Reading syms from /usr/lib64/valgrind/memcheck-amd64-linux (0x38000000)--18729--    object doesn't have a dynamic symbol table--18729-- Reading syms from /lib64/ld-2.5.so (0x3f75c00000)--18729-- Reading suppressions file: /usr/lib64/valgrind/default.supp--18729-- REDIR: 0x3f75c145d0 (strlen) redirected to 0x3803e767 (vgPlain_amd64_linux_REDIR_FOR_strlen)--18729-- Reading syms from /usr/lib64/valgrind/vgpreload_core-amd64-linux.so (0x4802000)--18729-- Reading syms from /usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so (0x4a03000)==18729== WARNING: new redirection conflicts with existing -- ignoring it--18729--     new: 0x3f75c145d0 (strlen              ) R-&gt; 0x04a06dc0 strlen--18729-- REDIR: 0x3f75c143f0 (index) redirected to 0x4a06c30 (index)--18729-- REDIR: 0x3f75c145a0 (strcmp) redirected to 0x4a06e90 (strcmp)--18729-- Reading syms from /opt/openmpi-1.3.4-gnu/lib/libmpi_cxx.so.0.0.0 (0x4c0a000)--18729-- Reading syms from /opt/openmpi-1.3.4-gnu/lib/libmpi.so.0.0.1 (0x4e2600
<br>
--18729-- Reading syms from /opt/openmpi-1.3.4-gnu/lib/libmpi.so.0.0.1 (0x4e26000)--18729-- Reading syms from /opt/openmpi-1.3.4-gnu/lib/libopen-rte.so.0.0.0 (0x5258000)--18729-- Reading syms from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0.0.0 (0x54db000)--18729-- Reading syms from /usr/lib64/librdmacm.so.1.0.0 (0x3f77000000)--18729--    object doesn't have a symbol table--18729-- Reading syms from /usr/lib64/libibverbs.so.1.0.0 (0x3f76400000)--18729--    object doesn't have a symbol table--18729-- Reading syms from /usr/lib64/libdat.so.1.0.2 (0x5778000)--18729--    object doesn't have a symbol table--18729-- Reading syms from /scratch/torque-2.4.2/lib/libtorque.so.2.0.0 (0x5982000)--18729-- Reading syms from /lib64/libdl-2.5.so (0x3f76800000)--18729-- Reading syms from /lib64/libnsl-2.5.so (0x3f7fe00000)--18729-- Reading syms from /lib64/libutil-2.5.so (0x3f84e00000)--18729-- Reading syms from /lib64/libm-2.5.so (0x5c97000)--18729-- Reading syms from /usr/lib64/libstdc++.so.6.0.8 (0x3f7c800000)--18729--    object doesn't have a symbol table--18729-- Reading syms from /lib64/libgcc_s-4.1.2-20080825.so.1 (0x3f7b800000)--18729--    object doesn't have a symbol table--18729-- Reading syms from /lib64/libpthread-2.5.so (0x3f76c00000)--18729-- Reading syms from /lib64/libc-2.5.so (0x3f76000000)--18729-- REDIR: 0x3f7607ae00 (memset) redirected to 0x4a07030 (memset)--18729-- REDIR: 0x3f7607c240 (memcpy) redirected to 0x4a08030 (memcpy)--18729-- REDIR: 0x3f76079f40 (rindex) redirected to 0x4a06ae0 (rindex)--18729-- REDIR: 0x3f76079b50 (strlen) redirected to 0x4a06d80 (strlen)--18729-- REDIR: 0x3f76074dc0 (malloc) redirected to 0x4a05d9a (malloc)--18729-- REDIR: 0x3f76072870 (free) redirected to 0x4a059aa (free)--18729-- REDIR: 0x3f76079e90 (strncpy) redirected to 0x4a081a0 (strncpy)--18729-- REDIR: 0x3f76079dd0 (strncmp) redirected to 0x4a06de0 (strncmp)--18729-- REDIR: 0x3f760749e0 (calloc) redirected to 0x4a05092 (calloc)--18729-- REDIR: 0x3f7c8bd1c0 (operator new(unsigned long)) redirected to 0x4a065ea (operator new(unsigned long))--18729-- REDIR: 0x3f7607b930 (mempcpy) redirected to 0x4a07870 (mempcpy)--18729-- REDIR: 0xffffffffff600400 (???) redirected to 0x3803e75d (vgPlain_amd64_linux_REDIR_FOR_vtime)--18729-- REDIR: 0x3f76079610 (strcpy) redirected to 0x4a082c0 (strcpy)--18729-- REDIR: 0x3f760795d0 (strcmp) redirected to 0x4a06e50 (strcmp)--18729-- REDIR: 0x3f76079c40 (strnlen) redirected to 0x4a06d50 (strnlen)--18729-- REDIR: 0x3f7c8bbf50 (operator delete(void*)) redirected to 0x4a056bc (operator delete(void*))--18729-- REDIR: 0x3f7607a640 (memchr) redirected to 0x4a06f10 (memchr)--18729-- REDIR: 0x3f76079420 (index) redirected to 0x4a06b70 (index)--18729-- REDIR: 0x3f7607ac60 (memmove) redirected to 0x4a07080 (memmove)--18729-- REDIR: 0x3f760752e0 (realloc) redirected to 0x4a05e4b (realloc)
<br>
--18729-- REDIR: 0x3f76079d30 (strncat) redirected to 0x4a06c60 (strncat)--18729-- REDIR: 0x3f76079260 (strcat) redirected to 0x4a07590 (strcat)--18729-- REDIR: 0x3f7607cea0 (rawmemchr) redirected to 0x4a07110 (rawmemchr)--18729-- REDIR: 0x3f76074ff0 (memalign) redirected to 0x4a04f6c (memalign)--18729-- REDIR: 0xffffffffff600000 (???) redirected to 0x3803e753 (vgPlain_amd64_linux_REDIR_FOR_vgettimeofday)--18729-- REDIR: 0x3f7607cff0 (strchrnul) redirected to 0x4a070e0 (strchrnul)--18729-- REDIR: 0x3f7607bf40 (stpcpy) redirected to 0x4a07b10 (stpcpy)--18729-- Reading syms from /lib64/libnss_files-2.5.so (0x794b000)--18729-- Reading syms from /lib64/libnss_nis-2.5.so (0x7b56000)--18729-- REDIR: 0x3f76075230 (posix_memalign) redirected to 0x4a05047 (posix_memalign)--18729-- Reading syms from /usr/lib64/libdaplcma.so.1.0.2 (0x8762000)--18729--    object doesn't have a symbol table==18729== Invalid write of size 8==18729==    at 0x443BEF: initPopPara(population*, std::vector&lt;message_para_to_workersT, std::allocator&lt;message_para_to_workersT&gt; &gt;&amp;, initParaType&amp;, int, int, std::vector&lt;double, std::allocator&lt;double&gt; &gt;&amp;) (main-parallel2.cpp:552)==18729==    by 0x44F12E: main (main-parallel2.cpp:204)==18729==  Address 0x62c9da0 is 0 bytes after a block of size 0 alloc'd==18729==    at 0x4A0666E: operator new(unsigned long) (vg_replace_malloc.c:220)==18729==    by 0x4573E4: void std::__uninitialized_fill_n_aux&lt;message_para_to_workersT*, unsigned long, message_para_to_workersT&gt;(message_para_to_workersT*, unsigned long, message_para_to_workersT const&amp;, __false_type) (new_allocator.h:88)==18729==    by 0x4576CF: void std::__uninitialized_fill_n_a&lt;message_para_to_workersT*, unsigned long, message_para_to_workersT, message_para_to_workersT&gt;(message_para_to_workersT*, unsigned long, message_para_to_workersT const&amp;, std::allocator&lt;message_para_to_workersT&gt;) (stl_uninitialized.h:218)==18729==    by 0x44EE2E: main (stl_vector.h:218)==18729====18729== Invalid read of size 8==18729==    at 0x44F13A: main (main-parallel2.cpp:208)==18729==  Address 0x62c9d60 is 0 bytes after a block of size 0 alloc'd==18729==    at 0x4A0666E: operator new(unsigned long) (vg_replace_malloc.c:220)==18729==    by 0x45733D: void std::__uninitialized_fill_n_aux&lt;message_para_to_workersT*, unsigned long, message_para_to_workersT&gt;(message_para_to_workersT*, unsigned long, message_para_to_workersT const&amp;, __false_type) (new_allocator.h:88)==18729==    by 0x4576CF: void std::__uninitialized_fill_n_a&lt;message_para_to_workersT*, unsigned long, message_para_to_workersT, message_para_to_workersT&gt;(message_para_to_workersT*, unsigned long, message_para_to_workersT const&amp;, std::allocator&lt;message_para_to_workersT&gt;) (stl_uninitialized.h:218)==18729==    by 0x44EE2E: main (stl_vector.h:218)==18729==
<br>
valgrind: m_mallocfree.c:225 (mk_plain_bszB): Assertion 'bszB != 0' failed.valgrind: This is probably caused by your program erroneously writing past theend of a heap block and corrupting heap metadata.  If you fix anyinvalid writes reported by Memcheck, this assertion failure will
<br>
probably go away.  Please try that before reporting this as a bug.
<br>
==18729==    at 0x38029D5C: report_and_quit (m_libcassert.c:145)==18729==    by 0x3802A032: vgPlain_assert_fail (m_libcassert.c:217)==18729==    by 0x38035645: vgPlain_arena_malloc (m_mallocfree.c:225)==18729==    by 0x38002BB5: vgMemCheck_new_block (mc_malloc_wrappers.c:199)==18729==    by 0x38002F6B: vgMemCheck___builtin_new (mc_malloc_wrappers.c:246)==18729==    by 0x3806070C: do_client_request (scheduler.c:1362)==18729==    by 0x38061D30: vgPlain_scheduler (scheduler.c:1061)==18729==    by 0x38085E6E: run_a_thread_NORETURN (syswrap-linux.c:91)
<br>
sched status:  running_tid=1
<br>
Thread 1: status = VgTs_Runnable==18729==    at 0x4A0666E: operator new(unsigned long) (vg_replace_malloc.c:220)==18729==    by 0x464506: __gnu_cxx::new_allocator&lt;int&gt;::allocate(unsigned long, void const*) (new_allocator.h:88)==18729==    by 0x46452E: std::_Vector_base&lt;int, std::allocator&lt;int&gt; &gt;::_M_allocate(unsigned long) (stl_vector.h:127)==18729==    by 0x464560: std::_Vector_base&lt;int, std::allocator&lt;int&gt; &gt;::_Vector_base(unsigned long, std::allocator&lt;int&gt; const&amp;) (stl_vector.h:113)==18729==    by 0x464B6A: std::vector&lt;int, std::allocator&lt;int&gt; &gt;::vector(unsigned long, int const&amp;, std::allocator&lt;int&gt; const&amp;) (stl_vector.h:216)==18729==    by 0x488F62: Index::Index() (index.cpp:20)==18729==    by 0x489147: ReadFile(char const*) (index.cpp:86)==18729==    by 0x48941C: ImportIndices() (index.cpp:121)==18729==    by 0x445D00: myNeplanTaskScheduler(CNSGA2*, int, int, int, population*, char, int, std::vector&lt;message_para_to_workersT, std::allocator&lt;message_para_to_workersT&gt; &gt;&amp;, ompi_datatype_t*, int&amp;, int&amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt;&amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt;&amp;, std::vector&lt;double, std::allocator&lt;double&gt; &gt;&amp;, int, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt;&amp;, ompi_datatype_t*, int, ompi_datatype_t*, int) (myNetplanScheduler.cpp:109)==18729==    by 0x44F2DF: main (main-parallel2.cpp:216)
<br>
<p>Note: see also the FAQ in the source distribution.It contains workarounds to several common problems.In particular, if Valgrind aborted or crashed afteridentifying problems in your program, there's a good chancethat fixing those problems will prevent Valgrind aborting orcrashing, especially if it happened in m_mallocfree.c.
<br>
<p>------------------------------------------------------------
<br>
<p><p><span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI seg fault by a class with weird address.
</span><br>
<span class="quotelev1">&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Wed, 16 Mar 2011 06:43:01 -0400
</span><br>
<span class="quotelev1">&gt; To: dtustudy68_at_[hidden]
</span><br>
<span class="quotelev1">&gt; CC: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you run with a memory checking debugger like Valgrind?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 15, 2011, at 8:30 PM, &quot;Jack Bryan&quot; &lt;dtustudy68_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have installed a new open MPI 1.3.4. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; But I got more weird errors: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; *** glibc detected *** /lustre/nsga2b: malloc(): memory corruption (fast): 0x000000001cafc450 ***
</span><br>
<span class="quotelev2">&gt; &gt; ======= Backtrace: =========
</span><br>
<span class="quotelev2">&gt; &gt; /lib64/libc.so.6[0x3c50272aeb]
</span><br>
<span class="quotelev2">&gt; &gt; /lib64/libc.so.6(__libc_malloc+0x7a)[0x3c5027402a]
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/libstdc++.so.6(_Znwm+0x1d)[0x3c590bd17d]
</span><br>
<span class="quotelev2">&gt; &gt; /lustre/jxding/netplan49/nsga2b[0x445bc6]
</span><br>
<span class="quotelev2">&gt; &gt; /lustre/jxding/netplan49/nsga2b[0x44f43b]
</span><br>
<span class="quotelev2">&gt; &gt; /lib64/libc.so.6(__libc_start_main+0xf4)[0x3c5021d974]
</span><br>
<span class="quotelev2">&gt; &gt; /lustre/jxding/netplan49/nsga2b(__gxx_personality_v0+0x499)[0x443909]
</span><br>
<span class="quotelev2">&gt; &gt; ======= Memory map: ========
</span><br>
<span class="quotelev2">&gt; &gt; 00400000-00f33000 r-xp 00000000 6ac:e3210 685016360                      /lustre/netplan49/nsga2b
</span><br>
<span class="quotelev2">&gt; &gt; 01132000-0117e000 rwxp 00b32000 6ac:e3210 685016360                      /lustre/netplan49/nsga2b
</span><br>
<span class="quotelev2">&gt; &gt; 0117e000-01188000 rwxp 0117e000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; 1ca11000-1ca78000 rwxp 1ca11000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; 1ca78000-1ca79000 rwxp 1ca78000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; 1ca79000-1ca7a000 rwxp 1ca79000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; 1ca7a000-1cab8000 rwxp 1ca7a000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; 1cab8000-1cac7000 rwxp 1cab8000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; 1cac7000-1cacf000 rwxp 1cac7000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; 1cacf000-1cad0000 rwxp 1cacf000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; 1cad0000-1cad1000 rwxp 1cad0000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; 1cad1000-1cad2000 rwxp 1cad1000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; 1cad2000-1cada000 rwxp 1cad2000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; 1cada000-1cadc000 rwxp 1cada000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; 1cadc000-1cae0000 rwxp 1cadc000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; .........................
</span><br>
<span class="quotelev2">&gt; &gt; 512600000-3512605000 r-xp 00000000 00:11 12043                          /usr/lib64/librdmacm.so.1
</span><br>
<span class="quotelev2">&gt; &gt; 3512605000-3512804000 ---p 00005000 00:11 12043                          /usr/lib64/librdmacm.so.1
</span><br>
<span class="quotelev2">&gt; &gt; 3512804000-3512805000 rwxp 00004000 00:11 12043                          /usr/lib64/librdmacm.so.1
</span><br>
<span class="quotelev2">&gt; &gt; 3512e00000-3512e0c000 r-xp 00000000 00:11 5545                           /usr/lib64/libibverbs.so.1
</span><br>
<span class="quotelev2">&gt; &gt; 3512e0c000-351300b000 ---p 0000c000 00:11 5545                           /usr/lib64/libibverbs.so.1
</span><br>
<span class="quotelev2">&gt; &gt; 351300b000-351300c000 rwxp 0000b000 00:11 5545                           /usr/lib64/libibverbs.so.1
</span><br>
<span class="quotelev2">&gt; &gt; 3c4f200000-3c4f21c000 r-xp 00000000 00:11 2853                           /lib64/ld-2.5.so
</span><br>
<span class="quotelev2">&gt; &gt; 3c4f41b000-3c4f41c000 r-xp 0001b000 00:11 2853                           /lib64/ld-2.5.so
</span><br>
<span class="quotelev2">&gt; &gt; 3c4f41c000-3c4f41d000 rwxp 0001c000 00:11 2853                           /lib64/ld-2.5.so
</span><br>
<span class="quotelev2">&gt; &gt; 3c50200000-3c5034c000 r-xp 00000000 00:11 897                            /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; 3c5034c000-3c5054c000 ---p 0014c000 00:11 897                            /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; 3c5054c000-3c50550000 r-xp 0014c000 00:11 897                            /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; 3c50550000-3c50551000 rwxp 00150000 00:11 897                            /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; 3c50551000-3c50556000 rwxp 3c50551000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; 3c50600000-3c50682000 r-xp 00000000 00:11 2924                           /lib64/libm.so.6
</span><br>
<span class="quotelev2">&gt; &gt; 3c50682000-3c50881000 ---p 00082000 00:11 2924                           /lib64/libm.so.6
</span><br>
<span class="quotelev2">&gt; &gt; 3c50881000-3c50882000 r-xp 00081000 00:11 2924                           /lib64/libm.so.6
</span><br>
<span class="quotelev2">&gt; &gt; 3c50882000-3c50883000 rwxp 00082000 00:11 2924                           /lib64/libm.so.6
</span><br>
<span class="quotelev2">&gt; &gt; 3c50a00000-3c50a02000 r-xp 00000000 00:11 923                            /lib64/libdl.so.2
</span><br>
<span class="quotelev2">&gt; &gt; 3c50a02000-3c50c02000 ---p 00002000 00:11 923                            /lib64/libdl.so.2
</span><br>
<span class="quotelev2">&gt; &gt; 3c50c02000-3c50c03000 r-xp 00002000 00:11 923                            /lib64/libdl.so.2
</span><br>
<span class="quotelev2">&gt; &gt; 3c50c03000-3c50c04000 rwxp 00003000 00:11 923                            /lib64/libdl.so.2
</span><br>
<span class="quotelev2">&gt; &gt; 3c50e00000-3c50e16000 r-xp 00000000 00:11 1011                           /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; .....................
</span><br>
<span class="quotelev2">&gt; &gt; 2ae87b05e000-2ae87b075000 r-xp 00000000 6ac:e3210 686492235              /lustre/mpi_protocol_091117/openmpi134/lib/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev2">&gt; &gt; 2ae87b075000-2ae87b274000 ---p 00017000 6ac:e3210 686492235              /lustre/mpi_protocol_091117/openmpi134/lib/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev2">&gt; &gt; 2ae87b274000-2ae87b277000 rwxp 00016000 6ac:e3210 686492235              /lustre/mpi_protocol_091117/openmpi134/lib/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; fff2fa38000-7fff2fa4e000 rwxp 7ffffffe9000 00:00 0                      [stack]
</span><br>
<span class="quotelev2">&gt; &gt; ffffffffff600000-ffffffffffe00000 ---p 00000000 00:00 0                  [vdso]
</span><br>
<span class="quotelev2">&gt; &gt; [n332:82320] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [n332:82320] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt; &gt; [n332:82320] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt; &gt; [n332:82320] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0]
</span><br>
<span class="quotelev2">&gt; &gt; [n332:82320] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x3c50230215]
</span><br>
<span class="quotelev2">&gt; &gt; [n332:82320] [ 2] /lib64/libc.so.6(abort+0x110) [0x3c50231cc0]
</span><br>
<span class="quotelev2">&gt; &gt; [n332:82320] [ 3] /lib64/libc.so.6 [0x3c5026a7fb]
</span><br>
<span class="quotelev2">&gt; &gt; [n332:82320] [ 4] /lib64/libc.so.6 [0x3c50272aeb]
</span><br>
<span class="quotelev2">&gt; &gt; [n332:82320] [ 5] /lib64/libc.so.6(__libc_malloc+0x7a) [0x3c5027402a]
</span><br>
<span class="quotelev2">&gt; &gt; [n332:82320] [ 6] /usr/lib64/libstdc++.so.6(_Znwm+0x1d) [0x3c590bd17d]
</span><br>
<span class="quotelev2">&gt; &gt; [n332:82320] [ 7] /lustre/jxding/netplan49/nsga2b [0x445bc6]
</span><br>
<span class="quotelev2">&gt; &gt; [n332:82320] [ 8] /lustre/jxding/netplan49/nsga2b [0x44f43b]
</span><br>
<span class="quotelev2">&gt; &gt; [n332:82320] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3c5021d974]
</span><br>
<span class="quotelev2">&gt; &gt; [n332:82320] [10] /lustre/nsga2b(__gxx_personality_v0+0x499) [0x443909]
</span><br>
<span class="quotelev2">&gt; &gt; [n332:82320] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; =&gt;&gt; PBS: job killed: walltime 117 exceeded limit 90
</span><br>
<span class="quotelev2">&gt; &gt; mpirun: killing job...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] OMPI seg fault by a class with weird address.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Tue, 15 Mar 2011 12:50:41 -0400
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CC: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: dtustudy68_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You can:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -np 4 valgrind ./my_application
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; That is, you run 4 copies of valgrind, each with one instance of ./my_application. Then you'll get valgrind reports for your applications.  You might want to dig into the valgrind command line options to have it dump the results to files with unique prefixes (e.g., PID and/or hostname) so that you can get a unique report from each process.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If you disabled ptmalloc and you're still getting the same error, then it sounds like an application error. Check out and see what valgrind tells you.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mar 15, 2011, at 11:25 AM, Jack Bryan wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; From <a href="http://valgrind.org/docs/manual/mc-manual.html#mc-manual.mpiwrap">http://valgrind.org/docs/manual/mc-manual.html#mc-manual.mpiwrap</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I find that 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &quot;Currently the wrappers are only buildable with mpiccs which are based on GNU GCC or Intel's C++ Compiler.&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The cluster which I am working on is using GNU Open MPI mpic++. i am afraid that the Valgrind wrapper can work here. 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I do not have system administrator authorization. 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Are there other mem-checkers (open source) that can do this ?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; thanks
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Jack
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Subject: Re: [OMPI users] OMPI seg fault by a class with weird address.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Date: Tue, 15 Mar 2011 06:19:53 -0400
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; CC: dtustudy68_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; You may also want to run your program through a memory-checking debugger such as valgrind to see if it turns up any other problems.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; AFIK, ptmalloc should be fine for use with STL vector allocation.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; On Mar 15, 2011, at 4:00 AM, Belaid MOA wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Hi Jack,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; I may need to see the whole code to decide but my quick look suggest that ptmalloc is causing a problem with STL-vector allocation. ptmalloc is the openMPI internal malloc library. Could you try to build openMPI without memory management (using --without-memory-manager) and let us know the outcome. ptmalloc is not needed if you are not using an RDMA interconnect.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; With best regards,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; -Belaid.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; From: dtustudy68_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; To: belaid_moa_at_[hidden]; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Subject: RE: [OMPI users] OMPI seg fault by a class with weird address.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Date: Tue, 15 Mar 2011 00:30:19 -0600
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Hi, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Because the code is very long, I just show the calling relationship of functions. 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; main()
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; scheduler();
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; scheduler()
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ImportIndices();
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ImportIndices()
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Index IdxNode ;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; IdxNode = ReadFile(&quot;fileName&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Index ReadFile(const char* fileinput) 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Index TempIndex;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; .........
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; vector&lt;int&gt; Index::GetPosition() const { return Position; }
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; vector&lt;int&gt; Index::GetColumn() const { return Column; }
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; vector&lt;int&gt; Index::GetYear() const { return Year; }
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; vector&lt;string&gt; Index::GetName() const { return Name; }
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; int Index::GetPosition(const int idx) const { return Position[idx]; }
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; int Index::GetColumn(const int idx) const { return Column[idx]; }
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; int Index::GetYear(const int idx) const { return Year[idx]; }
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; string Index::GetName(const int idx) const { return Name[idx]; }
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; int Index::GetSize() const { return Position.size(); }
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; The sequential code works well, and there is no scheduler(). 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; The parallel code output from gdb:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ----------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Breakpoint 1, myNeplanTaskScheduler(CNSGA2 *, int, int, int, ._85 *, char, int, message_para_to_workers_VecT &amp;, MPI_Datatype, int &amp;, int &amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, std::vector&lt;double, std::allocator&lt;double&gt; &gt; &amp;, int, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, MPI_Datatype, int, MPI_Datatype, int) (nsga2=0x118c490, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; popSize=&lt;value optimized out&gt;, nodeSize=&lt;value optimized out&gt;, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; myRank=&lt;value optimized out&gt;, myChildpop=0x1208d80, genCandTag=65 'A', 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; generationNum=1, myPopParaVec=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; message_to_master_type=0x7fffffffd540, myT1Flag=@0x7fffffffd68c, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; myT2Flag=@0x7fffffffd688, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; resultTaskPackageT1=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; resultTaskPackageT2Pr=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; xdataV=std::vector of length 4, capacity 4 = {...}, objSize=7, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; resultTaskPackageT12=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; xdata_to_workers_type=0x121c410, myGenerationNum=1, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Mpara_to_workers_type=0x121b9b0, nconNum=0)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; at src/nsga2/myNetplanScheduler.cpp:109
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 109 ImportIndices();
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (gdb) c
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Continuing.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Breakpoint 2, ImportIndices () at src/index.cpp:120
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 120 IdxNode = ReadFile(&quot;prepdata/idx_node.csv&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (gdb) c
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Continuing.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Breakpoint 4, ReadFile (fileinput=0xd8663d &quot;prepdata/idx_node.csv&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; at src/index.cpp:86
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 86 Index TempIndex;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (gdb) c
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Continuing.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Breakpoint 5, Index::Index (this=0x7fffffffcb80) at src/index.cpp:20
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 20 Name(0) {}
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (gdb) c
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Continuing.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 0x00002aaaab3b0b81 in opal_memory_ptmalloc2_int_malloc ()
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ---------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; the backtrace output from the above parallel OpenMPI code:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; #0 0x00002aaaab3b0b81 in opal_memory_ptmalloc2_int_malloc ()
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; #1 0x00002aaaab3b2bd3 in opal_memory_ptmalloc2_malloc ()
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; #2 0x0000003f7c8bd1dd in operator new(unsigned long) ()
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; from /usr/lib64/libstdc++.so.6
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; #3 0x00000000004646a7 in __gnu_cxx::new_allocator&lt;int&gt;::allocate (
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; this=0x7fffffffcb80, __n=0)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c++/4.1.2/ext/new_allocator.h:88
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; #4 0x00000000004646cf in std::_Vector_base&lt;int, std::allocator&lt;int&gt; &gt;::_M_allocate (this=0x7fffffffcb80, __n=0)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c++/4.1.2/bits/stl_vector.h:127
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; #5 0x0000000000464701 in std::_Vector_base&lt;int, std::allocator&lt;int&gt; &gt;::_Vector_base (this=0x7fffffffcb80, __n=0, __a=...)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c++/4.1.2/bits/stl_vector.h:113
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; #6 0x0000000000464d0b in std::vector&lt;int, std::allocator&lt;int&gt; &gt;::vector (
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; this=0x7fffffffcb80, __n=0, __value=@0x7fffffffc968, __a=...)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c++/4.1.2/bits/stl_vector.h:216
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; #7 0x00000000004890d7 in Index::Index (this=0x7fffffffcb80)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; at src/index.cpp:20
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; #8 0x000000000048927a in ReadFile (fileinput=0xd8663d &quot;prepdata/idx_node.csv&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; at src/index.cpp:86
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; #9 0x0000000000489533 in ImportIndices () at src/index.cpp:120
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; #10 0x0000000000445e0e in myNeplanTaskScheduler(CNSGA2 *, int, int, int, ._85 *, char, int, message_para_to_workers_VecT &amp;, MPI_Datatype, int &amp;, int &amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, std::vector&lt;double, std::allocator&lt;double&gt; &gt; &amp;, int, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, MPI_Datatype, int, MPI_Datatype, int) (nsga2=0x118c490, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; popSize=&lt;value optimized out&gt;, nodeSize=&lt;value optimized out&gt;, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; myRank=&lt;value optimized out&gt;, myChildpop=0x1208d80, genCandTag=65 'A', 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; generationNum=1, myPopParaVec=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; message_to_master_type=0x7fffffffd540, myT1Flag=@0x7fffffffd68c, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; myT2Flag=@0x7fffffffd688, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; resultTaskPackageT1=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; resultTaskPackageT2Pr=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; xdataV=std::vector of length 4, capacity 4 = {...}, objSize=7, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; resultTaskPackageT12=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; xdata_to_workers_type=0x121c410, myGenerationNum=1, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Mpara_to_workers_type=0x121b9b0, nconNum=0)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; at src/nsga2/myNetplanScheduler.cpp:109
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; #11 0x000000000044f44b in main (argc=1, argv=0x7fffffffd998)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; at src/nsga2/main-parallel2.cpp:216
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ----------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; What is &quot;opal_memory_ptmalloc2_int_malloc ()&quot; ?
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; The gdb output from sequential code: 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; -------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Breakpoint 1, main (argc=&lt;value optimized out&gt;, argv=&lt;value optimized out&gt;)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; at src/nsga2/main-seq.cpp:32
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 32 ImportIndices();
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (gdb) c
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Continuing.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Breakpoint 2, ImportIndices () at src/index.cpp:115
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 115 IdxNode = ReadFile(&quot;prepdata/idx_node.csv&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (gdb) c
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Continuing.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Breakpoint 4, ReadFile (fileinput=0xd6bb9d &quot;prepdata/idx_node.csv&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; at src/index.cpp:86
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 86 Index TempIndex;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (gdb) c
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Continuing.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Breakpoint 5, Index::Index (this=0x7fffffffd6d0) at src/index.cpp:20
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 20 Name(0) {}
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (gdb) c
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Continuing.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Breakpoint 4, ReadFile (fileinput=0xd6bbb3 &quot;prepdata/idx_ud.csv&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; at src/index.cpp:86
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 86 Index TempIndex;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; #0 ReadFile (fileinput=0xd6bbb3 &quot;prepdata/idx_ud.csv&quot;) at src/index.cpp:86
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; #1 0x0000000000471cc9 in ImportIndices () at src/index.cpp:116
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; #2 0x000000000043bba6 in main (argc=&lt;value optimized out&gt;, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; argv=&lt;value optimized out&gt;) at src/nsga2/main-seq.cpp:32
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; --------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; From: belaid_moa_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; To: users_at_[hidden]; dtustudy68_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Subject: RE: [OMPI users] OMPI seg fault by a class with weird address.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Date: Tue, 15 Mar 2011 06:16:35 +0000
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Hi Jack,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 1- Where is your main function to see how you called your class?
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 2- I do not see the implementation of GetPosition, GetName, etc.?
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; With best regards,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; -Belaid.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; From: dtustudy68_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Date: Mon, 14 Mar 2011 19:04:12 -0600
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Subject: [OMPI users] OMPI seg fault by a class with weird address.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Hi, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; I got a run-time error of a Open MPI C++ program. 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; The following output is from gdb: 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 0x00002aaaab3b0b81 in opal_memory_ptmalloc2_int_malloc ()
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; At the point 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Breakpoint 9, Index::Index (this=0x7fffffffcb80) at src/index.cpp:20
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 20 Name(0) {}
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; The Index has been called before this point and no problem:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Breakpoint 9, Index::Index (this=0x117d800) at src/index.cpp:20
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 20 Name(0) {}
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (gdb) c
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Continuing.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Breakpoint 9, Index::Index (this=0x117d860) at src/index.cpp:20
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 20 Name(0) {}
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (gdb) c
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Continuing.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; It seems that the 0x7fffffffcb80 address is a problem. 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; But, I donot know the reason and how to remove the bug. 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Any help is really appreciated. 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; the following is the index definition.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ---------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; class Index {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; public:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Index();
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Index(const Index&amp; rhs);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ~Index();
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Index&amp; operator=(const Index&amp; rhs);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; vector&lt;int&gt; GetPosition() const;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; vector&lt;int&gt; GetColumn() const;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; vector&lt;int&gt; GetYear() const;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; vector&lt;string&gt; GetName() const;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; int GetPosition(const int idx) const;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; int GetColumn(const int idx) const;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; int GetYear(const int idx) const;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; string GetName(const int idx) const;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; int GetSize() const;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; void Add(const int idx, const int col, const string&amp; name);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; void Add(const int idx, const int col, const int year, const string&amp; name);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; void Add(const int idx, const Step&amp; col, const string&amp; name);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; void WriteFile(const char* fileinput) const;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; private:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; vector&lt;int&gt; Position;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; vector&lt;int&gt; Column;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; vector&lt;int&gt; Year;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; vector&lt;string&gt; Name;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; // Contructors and destructor for the Index class
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Index::Index() :
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Position(0),
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Column(0),
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Year(0),
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Name(0) {}
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Index::Index(const Index&amp; rhs) :
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Position(rhs.GetPosition()),
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Column(rhs.GetColumn()),
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Year(rhs.GetYear()),
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Name(rhs.GetName()) {}
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Index::~Index() {}
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Index&amp; Index::operator=(const Index&amp; rhs) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Position = rhs.GetPosition();
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Column = rhs.GetColumn(),
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Year = rhs.GetYear(),
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Name = rhs.GetName();
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; return *this;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ----------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; -- 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15884/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15885.php">Claudio Baeza Retamal: "[OMPI users] Issues in 1.4.3 version and system cpu usage"</a>
<li><strong>Previous message:</strong> <a href="15883.php">Brock Palen: "[OMPI users] MPI_AllReduce() deadlock on IB"</a>
<li><strong>In reply to:</strong> <a href="15876.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15886.php">Jeff Squyres: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Reply:</strong> <a href="15886.php">Jeff Squyres: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
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
