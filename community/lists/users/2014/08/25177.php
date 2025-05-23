<?
$subject_val = "Re: [OMPI users] long initialization";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 05:10:22 2014" -->
<!-- isoreceived="20140828091022" -->
<!-- sent="Thu, 28 Aug 2014 13:10:02 +0400" -->
<!-- isosent="20140828091002" -->
<!-- name="Timur Ismagilov" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] long initialization" -->
<!-- id="1409217002.558250261_at_f143.i.mail.ru" -->
<!-- charset="utf-8" -->
<!-- inreplyto="613B0BAB-18B5-49FD-A84E-2AE6EABA621F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] long initialization<br>
<strong>From:</strong> Timur Ismagilov (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-28 05:10:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25178.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
<li><strong>Previous message:</strong> <a href="25176.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots (updated findings)"</a>
<li><strong>In reply to:</strong> <a href="25167.php">Ralph Castain: "Re: [OMPI users] long initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25178.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
<li><strong>Reply:</strong> <a href="25178.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I enclosure 2 files with output of two foloowing commands (OMPI&#194;&#160;1.9a1r32570)
<br>
$time mpirun --leave-session-attached -mca oob_base_verbose 100 -np 1 ./hello_c &gt;&amp; out1.txt 
<br>
(Hello, world, I am ....)
<br>
real 1m3.952s
<br>
user 0m0.035s
<br>
sys 0m0.107s
<br>
$time mpirun --leave-session-attached -mca oob_base_verbose 100 --mca oob_tcp_if_include ib0 -np 1 ./hello_c &gt;&amp; out2.txt&#194;&#160;
<br>
(no Hello, word, I am ....)
<br>
real 0m9.337s
<br>
user 0m0.059s
<br>
sys 0m0.098s
<br>
Wed, 27 Aug 2014 06:31:02 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;How bizarre. Please add &quot;--leave-session-attached -mca oob_base_verbose 100&quot; to your cmd line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Aug 27, 2014, at 4:31 AM, Timur Ismagilov &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;When i try to specify oob with&#194;&#160;--mca oob_tcp_if_include &lt;one of interface from ifconfig&gt;, i alwase get error:
</span><br>
<span class="quotelev2">&gt;&gt;$ mpirun &#194;&#160;--mca oob_tcp_if_include ib0 -np 1 ./hello_c
</span><br>
<span class="quotelev2">&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev2">&gt;&gt;communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev2">&gt;&gt;of factors, including an inability to create a connection back
</span><br>
<span class="quotelev2">&gt;&gt;to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev2">&gt;&gt;route found between them. Please check network connectivity
</span><br>
<span class="quotelev2">&gt;&gt;(including firewalls and network routing requirements).
</span><br>
<span class="quotelev2">&gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Earlier, in ompi 1.8.1, I can not run mpi jobs without &quot;&#194;&#160;--mca oob_tcp_if_include ib0 &quot;... but now(ompi 1.9.a1) with this flag i get above error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Here is an output of ifconfig
</span><br>
<span class="quotelev2">&gt;&gt;$ ifconfig
</span><br>
<span class="quotelev2">&gt;&gt;eth1 Link encap:Ethernet HWaddr 00:15:17:EE:89:E1 &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;inet addr:10.0.251.53 Bcast:10.0.251.255 Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;UP BROADCAST RUNNING MULTICAST MTU:1500 Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;RX packets:215087433 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;TX packets:2648 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;collisions:0 txqueuelen:1000 &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;RX bytes:26925754883 (25.0 GiB) TX bytes:137971 (134.7 KiB)
</span><br>
<span class="quotelev2">&gt;&gt;Memory:b2c00000-b2c20000
</span><br>
<span class="quotelev2">&gt;&gt;eth2 Link encap:Ethernet HWaddr 00:02:C9:04:73:F8 &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;inet addr:10.0.0.4 Bcast:10.0.0.255 Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;UP BROADCAST RUNNING MULTICAST MTU:1500 Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;RX packets:4892833125 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;TX packets:8708606918 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;collisions:0 txqueuelen:1000 &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;RX bytes:1823986502132 (1.6 TiB) TX bytes:11957754120037 (10.8 TiB)
</span><br>
<span class="quotelev2">&gt;&gt;eth2.911 Link encap:Ethernet HWaddr 00:02:C9:04:73:F8 &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;inet addr:93.180.7.38 Bcast:93.180.7.63 Mask:255.255.255.224
</span><br>
<span class="quotelev2">&gt;&gt;UP BROADCAST RUNNING MULTICAST MTU:1500 Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;RX packets:3746454225 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;TX packets:1131917608 errors:0 dropped:3 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;collisions:0 txqueuelen:0 &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;RX bytes:285174723322 (265.5 GiB) TX bytes:11523163526058 (10.4 TiB)
</span><br>
<span class="quotelev2">&gt;&gt;eth3 Link encap:Ethernet HWaddr 00:02:C9:04:73:F9 &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;inet addr:10.2.251.14 Bcast:10.2.251.255 Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;UP BROADCAST RUNNING MULTICAST MTU:1500 Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;RX packets:591156692 errors:0 dropped:56 overruns:56 frame:56
</span><br>
<span class="quotelev2">&gt;&gt;TX packets:679729229 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;collisions:0 txqueuelen:1000 &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;RX bytes:324195989293 (301.9 GiB) TX bytes:770299202886 (717.3 GiB)
</span><br>
<span class="quotelev2">&gt;&gt;Ifconfig uses the ioctl access method to get the full address information, which limits hardware addresses to 8 bytes.
</span><br>
<span class="quotelev2">&gt;&gt;Because Infiniband address has 20 bytes, only the first 8 bytes are displayed correctly.
</span><br>
<span class="quotelev2">&gt;&gt;Ifconfig is obsolete! For replacement check ip.
</span><br>
<span class="quotelev2">&gt;&gt;ib0 Link encap:InfiniBand HWaddr 80:00:00:48:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00 &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;inet addr:10.128.0.4 Bcast:10.128.255.255 Mask:255.255.0.0
</span><br>
<span class="quotelev2">&gt;&gt;UP BROADCAST RUNNING MULTICAST MTU:2044 Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;RX packets:10843859 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;TX packets:8089839 errors:0 dropped:15 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;collisions:0 txqueuelen:1024 &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;RX bytes:939249464 (895.7 MiB) TX bytes:886054008 (845.0 MiB)
</span><br>
<span class="quotelev2">&gt;&gt;lo Link encap:Local Loopback &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;inet addr:127.0.0.1 Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;UP LOOPBACK RUNNING MTU:16436 Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;RX packets:31235107 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;TX packets:31235107 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;collisions:0 txqueuelen:0 &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;RX bytes:132750916041 (123.6 GiB) TX bytes:132750916041 (123.6 GiB)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Tue, 26 Aug 2014 09:48:35 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt; rhc_at_[hidden] &gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I think something may be messed up with your installation. I went ahead and tested this on a Slurm 2.5.4 cluster, and got the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;$ time mpirun -np 1 --host bend001 ./hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hello, World, I am 0 of 1 [0 local peers]: get_cpubind: 0 bitmap 0,12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;real 0m0.086s
</span><br>
<span class="quotelev3">&gt;&gt;&gt;user 0m0.039s
</span><br>
<span class="quotelev3">&gt;&gt;&gt;sys 0m0.046s
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;$ time mpirun -np 1 --host bend002 ./hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hello, World, I am 0 of 1 [0 local peers]: get_cpubind: 0 bitmap 0,12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;real 0m0.528s
</span><br>
<span class="quotelev3">&gt;&gt;&gt;user 0m0.021s
</span><br>
<span class="quotelev3">&gt;&gt;&gt;sys 0m0.023s
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Which is what I would have expected. With --host set to the local host, no daemons are being launched and so the time is quite short (just spent mapping and fork/exec). With --host set to a single remote host, you have the time it takes Slurm to launch our daemon on the remote host, so you get about half of a second.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;IIRC, you were having some problems with the OOB setup. If you specify the TCP interface to use, does your time come down?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Aug 26, 2014, at 8:32 AM, Timur Ismagilov &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I'm using slurm 2.5.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;$salloc -N8 --exclusive -J ompi -p test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;$ srun hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;node1-128-21
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;node1-128-24
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;node1-128-22
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;node1-128-26
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;node1-128-27
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;node1-128-20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;node1-128-25
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;node1-128-23
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;$ time mpirun -np 1 --host node1-128-21 ./hello_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hello, world, I am 0 of 1, (Open MPI v1.9a1, package: Open MPI semenov_at_compiler-2 Distribution, ident: 1.9a1r32570, repo rev: r32570, Aug 21, 2014 (nightly snapshot tarball), 146)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;real 1m3.932s
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;user 0m0.035s
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;sys 0m0.072s
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Tue, 26 Aug 2014 07:03:58 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt; rhc_at_[hidden] &gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;hmmm....what is your allocation like? do you have a large hostfile, for example?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;if you add a --host argument that contains just the local host, what is the time for that scenario?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;On Aug 26, 2014, at 6:27 AM, Timur Ismagilov &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;Hello!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;Here is my time results:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;$time mpirun -n 1 ./hello_c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;Hello, world, I am 0 of 1, (Open MPI v1.9a1, package: Open MPI semenov_at_compiler-2 Distribution, ident: 1.9a1r32570, repo rev: r32570, Aug 21, 2014 (nightly snapshot tarball), 146)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;real 1m3.985s
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;user 0m0.031s
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;sys 0m0.083s
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;Fri, 22 Aug 2014 07:43:03 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt; rhc_at_[hidden] &gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;I'm also puzzled by your timing statement - I can't replicate it:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;07:41:43&#194;&#160; &#194;&#160; $ time mpirun -n 1 ./hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;Hello, world, I am 0 of 1, (Open MPI v1.9a1, package: Open MPI rhc_at_bend001 Distribution, ident: 1.9a1r32577, repo rev: r32577, Unreleased developer copy, 125)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;real 0m0.547s
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;user 0m0.043s
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;sys 0m0.046s
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;The entire thing ran in 0.5 seconds
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Aug 22, 2014, at 6:33 AM, Mike Dubman &lt; miked_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;The default delimiter is &quot;;&quot; . You can change delimiter with mca_base_env_list_delimiter.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Fri, Aug 22, 2014 at 2:59 PM, Timur Ismagilov &#194;&#160; &lt; tismagilov_at_[hidden] &gt; &#194;&#160; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Hello!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;If i use latest night snapshot:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;$ ompi_info -V
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Open MPI v1.9a1r32570
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;*  In programm hello_c initialization&#194;&#160;takes ~1 min
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;In ompi 1.8.2rc4 and ealier it takes ~1 sec(or less)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;*  if i use&#194;&#160;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;$mpirun &#194;&#160;--mca mca_base_env_list 'MXM_SHM_KCOPY_MODE=off,OMP_NUM_THREADS=8' --map-by slot:pe=8 -np 1 ./hello_c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;i got error&#194;&#160;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;config_parser.c:657 &#194;&#160;MXM &#194;&#160;ERROR Invalid value for SHM_KCOPY_MODE: 'off,OMP_NUM_THREADS=8'. Expected: [off|knem|cma|autodetect]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;but with -x all works fine (but with warn)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;$mpirun &#194;&#160;-x MXM_SHM_KCOPY_MODE=off -x OMP_NUM_THREADS=8 -np 1 ./hello_c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;WARNING: The mechanism by which environment variables are explicitly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;..............
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;..............
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;..............
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Hello, world, I am 0 of 1, (Open MPI v1.9a1, package: Open MPI semenov_at_compiler-2 Distribution, ident: 1.9a1r32570, repo rev: r32570, Aug 21, 2014 (nightly snapshot tarball), 146)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Thu, 21 Aug 2014 06:26:13 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt; rhc_at_[hidden] &gt;:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Not sure I understand. The problem has been fixed in both the trunk and the 1.8 branch now, so you should be able to work with either of those nightly builds.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Aug 21, 2014, at 12:02 AM, Timur Ismagilov &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Have i&#194;&#160;I any opportunity to run mpi jobs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Wed, 20 Aug 2014 10:48:38 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt; rhc_at_[hidden] &gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;yes, i know - it is cmr'd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Aug 20, 2014, at 10:26 AM, Mike Dubman &lt; miked_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;btw, we get same error in v1.8 branch as well.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Wed, Aug 20, 2014 at 8:06 PM, Ralph Castain &#194;&#160; &lt; rhc_at_[hidden] &gt; &#194;&#160; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;It was not yet fixed - but should be now.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Aug 20, 2014, at 6:39 AM, Timur Ismagilov &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;As i can see, the bug is fixed, but in&#194;&#160;Open MPI v1.9a1r32516&#194;&#160; i still have the problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;$ mpirun &#194;&#160;-np 1 ./hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;of factors, including an inability to create a connection back
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;route found between them. Please check network connectivity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;(including firewalls and network routing requirements).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;b)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;$ mpirun --mca oob_tcp_if_include ib0 -np 1 ./hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;of factors, including an inability to create a connection back
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;route found between them. Please check network connectivity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;(including firewalls and network routing requirements).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;c)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;$ mpirun --mca oob_tcp_if_include ib0 -debug-daemons --mca plm_base_verbose 5 -mca oob_base_verbose 10 -mca rml_base_verbose 10 -np 1 ./hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca:base:select:( plm) Querying component [isolated]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca:base:select:( plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca:base:select:( plm) Querying component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca:base:select:( plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca:base:select:( plm) Querying component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca:base:select:( plm) Query of component [slurm] set priority to 75
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca:base:select:( plm) Selected component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] oob:tcp: component_available called
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] WORKING INTERFACE 2 KERNEL INDEX 3 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] WORKING INTERFACE 3 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] WORKING INTERFACE 5 KERNEL INDEX 6 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] oob:tcp:init adding 10.128.0.4 to our list of V4 connections
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] WORKING INTERFACE 6 KERNEL INDEX 7 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] TCP STARTUP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] assigned IPv4 port 59460
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_register: registering rml components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_register: found loaded component oob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_register: component oob has no register or open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_open: opening rml components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_open: found loaded component oob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: components_open: component oob open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] orte_rml_base_select: initializing rml component oob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 30 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 15 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 32 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 33 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 5 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 10 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 12 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 9 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 34 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 2 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 21 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 22 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 45 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 46 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 1 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] posting persistent recv on tag 27 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Daemon was launched on node1-128-01 - beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;WARNING: An invalid value was given for oob_tcp_if_include. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;value will be ignored.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Local host: node1-128-01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Value: &quot;ib0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Message: Invalid specification (missing &quot;/&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;None of the TCP networks specified to be included for out-of-band communications
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;could be found:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Value given:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Please revise the specification and try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;No network interfaces were found for out-of-band communications. We require
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;at least one available network for out-of-band messaging.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;orte_oob_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--&gt; Returned value (null) (-43) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;srun: error: node1-128-01: task 0: Exited with exit code 213
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;srun: Terminating job step 661215.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;of factors, including an inability to create a connection back
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;route found between them. Please check network connectivity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;(including firewalls and network routing requirements).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] orted_cmd: received halt_vm cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: close: component oob closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: close: unloading component oob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] [[49095,0],0] TCP SHUTDOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: close: component tcp closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[compiler-2:14673] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Tue, 12 Aug 2014 18:33:24 +0000 &#208;&#190;&#209;&#130; &quot;Jeff Squyres (jsquyres)&quot; &lt; jsquyres_at_[hidden] &gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I filed the following ticket:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4857">https://svn.open-mpi.org/trac/ompi/ticket/4857</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Aug 12, 2014, at 12:39 PM, Jeff Squyres (jsquyres) &lt; jsquyres_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (please keep the users list CC'ed)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We talked about this on the weekly engineering call today. Ralph has an idea what is happening -- I need to do a little investigation today and file a bug. I'll make sure you're CC'ed on the bug ticket.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 12, 2014, at 12:27 PM, Timur Ismagilov &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't have this error in OMPI 1.9a1r32252 and OMPI 1.8.1 (with --mca oob_tcp_if_include ib0), but in all latest night snapshots i got this error.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tue, 12 Aug 2014 13:08:12 +0000 &#208;&#190;&#209;&#130; &quot;Jeff Squyres (jsquyres)&quot; &lt; jsquyres_at_[hidden] &gt;:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are you running any kind of firewall on the node where mpirun is invoked? Open MPI needs to be able to use arbitrary TCP ports between the servers on which it runs.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This second mail seems to imply a bug in OMPI's oob_tcp_if_include param handling, however -- it's supposed to be able to handle an interface name (not just a network specification).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph -- can you have a look?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 12, 2014, at 8:41 AM, Timur Ismagilov &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When i add --mca oob_tcp_if_include ib0 (infiniband interface) to mpirun (as it was here: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24857.php">http://www.open-mpi.org/community/lists/users/2014/07/24857.php</a> &#194;&#160; ) i got this output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:base:select:( plm) Querying component [isolated]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:base:select:( plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:base:select:( plm) Querying component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:base:select:( plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:base:select:( plm) Querying component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:base:select:( plm) Query of component [slurm] set priority to 75
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:base:select:( plm) Selected component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] oob:tcp: component_available called
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] WORKING INTERFACE 2 KERNEL INDEX 3 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] WORKING INTERFACE 3 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] WORKING INTERFACE 5 KERNEL INDEX 6 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] oob:tcp:init adding 10.128.0.4 to our list of V4 connections
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] WORKING INTERFACE 6 KERNEL INDEX 7 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] TCP STARTUP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] assigned IPv4 port 53883
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_register: registering rml components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_register: found loaded component oob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_register: component oob has no register or open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_open: opening rml components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_open: found loaded component oob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: components_open: component oob open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] orte_rml_base_select: initializing rml component oob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 30 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 15 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 32 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 33 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 5 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 10 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 12 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 9 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 34 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 2 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 21 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 22 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 45 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 46 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 1 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] posting persistent recv on tag 27 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-128-01 - beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-128-02 - beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; WARNING: An invalid value was given for oob_tcp_if_include. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; value will be ignored.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local host: node1-128-01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Value: &quot;ib0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Message: Invalid specification (missing &quot;/&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; WARNING: An invalid value was given for oob_tcp_if_include. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; value will be ignored.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local host: node1-128-02
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Value: &quot;ib0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Message: Invalid specification (missing &quot;/&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; None of the TCP networks specified to be included for out-of-band communications
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; could be found:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Value given:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please revise the specification and try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; None of the TCP networks specified to be included for out-of-band communications
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; could be found:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Value given:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please revise the specification and try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; No network interfaces were found for out-of-band communications. We require
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at least one available network for out-of-band messaging.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; No network interfaces were found for out-of-band communications. We require
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at least one available network for out-of-band messaging.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_oob_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --&gt; Returned value (null) (-43) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_oob_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --&gt; Returned value (null) (-43) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-128-02: task 1: Exited with exit code 213
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: Terminating job step 657300.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-128-01: task 0: Exited with exit code 213
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] orted_cmd: received halt_vm cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: close: component oob closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: close: unloading component oob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] [[42190,0],0] TCP SHUTDOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: close: component tcp closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08792] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tue, 12 Aug 2014 16:14:58 +0400 &#208;&#190;&#209;&#130; Timur Ismagilov &lt; tismagilov_at_[hidden] &gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have Open MPI v1.8.2rc4r32485
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When i run hello_c, I got this error message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $mpirun -np 2 hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When i run with --debug-daemons --mca plm_base_verbose 5 -mca oob_base_verbose 10 -mca rml_base_verbose 10 i got this output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $mpirun --debug-daemons --mca plm_base_verbose 5 -mca oob_base_verbose 10 -mca rml_base_verbose 10 -np 2 hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:base:select:( plm) Querying component [isolated]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:base:select:( plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:base:select:( plm) Querying component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:base:select:( plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:base:select:( plm) Querying component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:base:select:( plm) Query of component [slurm] set priority to 75
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:base:select:( plm) Selected component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] oob:tcp: component_available called
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] WORKING INTERFACE 2 KERNEL INDEX 3 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] oob:tcp:init adding 10.0.251.53 to our list of V4 connections
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] WORKING INTERFACE 3 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] oob:tcp:init adding 10.0.0.4 to our list of V4 connections
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] oob:tcp:init adding 10.2.251.14 to our list of V4 connections
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] WORKING INTERFACE 5 KERNEL INDEX 6 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] oob:tcp:init adding 10.128.0.4 to our list of V4 connections
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] WORKING INTERFACE 6 KERNEL INDEX 7 FAMILY: V4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] oob:tcp:init adding 93.180.7.38 to our list of V4 connections
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] TCP STARTUP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] assigned IPv4 port 38420
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_register: registering rml components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_register: found loaded component oob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_register: component oob has no register or open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_open: opening rml components
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_open: found loaded component oob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: components_open: component oob open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] orte_rml_base_select: initializing rml component oob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 30 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 15 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 32 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 33 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 5 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 10 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 12 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 9 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 34 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 2 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 21 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 22 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 45 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 46 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 1 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] posting persistent recv on tag 27 for peer [[WILDCARD],WILDCARD]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-08 - beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-03 - beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-05 - beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-02 - beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-01 - beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-04 - beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-07 - beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon was launched on node1-130-06 - beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],3] checking in as pid 7178 on host node1-130-03
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-03:07178] [[42202,0],3] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],2] checking in as pid 13581 on host node1-130-02
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-02:13581] [[42202,0],2] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],1] checking in as pid 17220 on host node1-130-01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-01:17220] [[42202,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],5] checking in as pid 6663 on host node1-130-05
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-05:06663] [[42202,0],5] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],8] checking in as pid 6683 on host node1-130-08
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-08:06683] [[42202,0],8] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],7] checking in as pid 7877 on host node1-130-07
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-07:07877] [[42202,0],7] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],4] checking in as pid 7735 on host node1-130-04
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-04:07735] [[42202,0],4] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[42202,0],6] checking in as pid 8451 on host node1-130-06
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node1-130-06:08451] [[42202,0],6] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-03: task 2: Exited with exit code 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: Terminating job step 657040.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-02: task 1: Exited with exit code 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; slurmd[node1-130-04]: *** STEP 657040.1 KILLED AT 2014-08-12T12:59:07 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; slurmd[node1-130-07]: *** STEP 657040.1 KILLED AT 2014-08-12T12:59:07 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; slurmd[node1-130-06]: *** STEP 657040.1 KILLED AT 2014-08-12T12:59:07 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: Job step aborted: Waiting up to 2 seconds for job step to finish.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-01: task 0: Exited with exit code 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-05: task 4: Exited with exit code 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-08: task 7: Exited with exit code 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-07: task 6: Exited with exit code 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-04: task 3: Killed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun: error: node1-130-06: task 5: Killed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] orted_cmd: received halt_vm cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: close: component oob closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: close: unloading component oob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] [[42202,0],0] TCP SHUTDOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: close: component tcp closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compiler-2:08780] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24987.php">http://www.open-mpi.org/community/lists/users/2014/08/24987.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24988.php">http://www.open-mpi.org/community/lists/users/2014/08/24988.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: &#194;&#160; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- &#194;&#160;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: &#194;&#160; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25001.php">http://www.open-mpi.org/community/lists/users/2014/08/25001.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-- &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;For corporate legal information go to: &#194;&#160; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25086.php">http://www.open-mpi.org/community/lists/users/2014/08/25086.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25093.php">http://www.open-mpi.org/community/lists/users/2014/08/25093.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25094.php">http://www.open-mpi.org/community/lists/users/2014/08/25094.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25095.php">http://www.open-mpi.org/community/lists/users/2014/08/25095.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25105.php">http://www.open-mpi.org/community/lists/users/2014/08/25105.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25127.php">http://www.open-mpi.org/community/lists/users/2014/08/25127.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-- &#194;&#160;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Kind Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;M. _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25128.php">http://www.open-mpi.org/community/lists/users/2014/08/25128.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25129.php">http://www.open-mpi.org/community/lists/users/2014/08/25129.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Subscription: &#194;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Link to this post: &#194;&#160; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25154.php">http://www.open-mpi.org/community/lists/users/2014/08/25154.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p>
<br>
<p>
<p>
<br><p>
[compiler-2:00750] mca: base: components_register: registering oob components
<br>
[compiler-2:00750] mca: base: components_register: found loaded component tcp
<br>
[compiler-2:00750] mca: base: components_register: component tcp register function successful
<br>
[compiler-2:00750] mca: base: components_open: opening oob components
<br>
[compiler-2:00750] mca: base: components_open: found loaded component tcp
<br>
[compiler-2:00750] mca: base: components_open: component tcp open function successful
<br>
[compiler-2:00750] mca:oob:select: checking available component tcp
<br>
[compiler-2:00750] mca:oob:select: Querying component [tcp]
<br>
[compiler-2:00750] oob:tcp: component_available called
<br>
[compiler-2:00750] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:init rejecting loopback interface lo
<br>
[compiler-2:00750] WORKING INTERFACE 2 KERNEL INDEX 3 FAMILY: V4
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:init adding 10.0.251.53 to our list of V4 connections
<br>
[compiler-2:00750] WORKING INTERFACE 3 KERNEL INDEX 4 FAMILY: V4
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:init adding 10.0.0.4 to our list of V4 connections
<br>
[compiler-2:00750] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:init adding 10.2.251.14 to our list of V4 connections
<br>
[compiler-2:00750] WORKING INTERFACE 5 KERNEL INDEX 6 FAMILY: V4
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:init adding 10.128.0.4 to our list of V4 connections
<br>
[compiler-2:00750] WORKING INTERFACE 6 KERNEL INDEX 7 FAMILY: V4
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:init adding 93.180.7.38 to our list of V4 connections
<br>
[compiler-2:00750] [[33912,0],0] TCP STARTUP
<br>
[compiler-2:00750] [[33912,0],0] attempting to bind to IPv4 port 0
<br>
[compiler-2:00750] [[33912,0],0] assigned IPv4 port 37873
<br>
[compiler-2:00750] mca:oob:select: Adding component to end
<br>
[compiler-2:00750] mca:oob:select: Found 1 active transports
<br>
[compiler-2:00750] [[33912,0],0] mca_oob_tcp_listen_thread: new connection: (20, 0) 10.0.128.26:46486
<br>
[compiler-2:00750] [[33912,0],0] mca_oob_tcp_listen_thread: new connection: (21, 11) 10.0.128.27:49851
<br>
[compiler-2:00750] [[33912,0],0] mca_oob_tcp_listen_thread: new connection: (22, 11) 10.0.128.21:45432
<br>
[compiler-2:00750] [[33912,0],0] mca_oob_tcp_listen_thread: new connection: (23, 11) 10.0.128.24:42895
<br>
[compiler-2:00750] [[33912,0],0] mca_oob_tcp_listen_thread: new connection: (24, 11) 10.0.128.25:60899
<br>
[compiler-2:00750] [[33912,0],0] mca_oob_tcp_listen_thread: new connection: (25, 11) 10.0.128.23:46083
<br>
[compiler-2:00750] [[33912,0],0] mca_oob_tcp_listen_thread: new connection: (26, 11) 10.0.128.20:34230
<br>
[compiler-2:00750] [[33912,0],0] mca_oob_tcp_listen_thread: new connection: (27, 11) 10.0.128.22:40660
<br>
[compiler-2:00750] [[33912,0],0] connection_handler: working connection (20, 2) 10.0.128.26:46486
<br>
[compiler-2:00750] [[33912,0],0] accept_connection: 10.0.128.26:46486
<br>
[compiler-2:00750] [[33912,0],0] connection_handler: working connection (21, 2) 10.0.128.27:49851
<br>
[compiler-2:00750] [[33912,0],0] accept_connection: 10.0.128.27:49851
<br>
[compiler-2:00750] [[33912,0],0] connection_handler: working connection (22, 2) 10.0.128.21:45432
<br>
[compiler-2:00750] [[33912,0],0] accept_connection: 10.0.128.21:45432
<br>
[compiler-2:00750] [[33912,0],0] connection_handler: working connection (23, 2) 10.0.128.24:42895
<br>
[compiler-2:00750] [[33912,0],0] accept_connection: 10.0.128.24:42895
<br>
[compiler-2:00750] [[33912,0],0] connection_handler: working connection (24, 2) 10.0.128.25:60899
<br>
[compiler-2:00750] [[33912,0],0] accept_connection: 10.0.128.25:60899
<br>
[compiler-2:00750] [[33912,0],0] connection_handler: working connection (25, 2) 10.0.128.23:46083
<br>
[compiler-2:00750] [[33912,0],0] accept_connection: 10.0.128.23:46083
<br>
[compiler-2:00750] [[33912,0],0] connection_handler: working connection (26, 2) 10.0.128.20:34230
<br>
[compiler-2:00750] [[33912,0],0] accept_connection: 10.0.128.20:34230
<br>
[compiler-2:00750] [[33912,0],0] connection_handler: working connection (27, 2) 10.0.128.22:40660
<br>
[compiler-2:00750] [[33912,0],0] accept_connection: 10.0.128.22:40660
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called
<br>
[compiler-2:00750] [[33912,0],0] RECV CONNECT ACK FROM UNKNOWN ON SOCKET 20
<br>
[compiler-2:00750] [[33912,0],0] waiting for connect ack from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] connect ack received from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] connect-ack recvd from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] mca_oob_tcp_recv_connect: connection from new peer
<br>
[compiler-2:00750] [[33912,0],0] connect-ack header from [[33912,0],7] is okay
<br>
[compiler-2:00750] [[33912,0],0] waiting for connect ack from [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] connect ack received from [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] connect-ack version from [[33912,0],7] matches ours
<br>
[compiler-2:00750] [[33912,0],0] connect-ack [[33912,0],7] authenticated
<br>
[compiler-2:00750] [[33912,0],0] tcp:peer_accept called for peer [[33912,0],7] in state UNKNOWN on socket 20
<br>
[compiler-2:00750] [[33912,0],0] SEND CONNECT ACK
<br>
[compiler-2:00750] [[33912,0],0] send blocking of 46 bytes to socket 20
<br>
[compiler-2:00750] [[33912,0],0] blocking send complete to socket 20
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],7] tcp_peer_connected on socket 20
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],7] accepted: 10.0.0.4 - 10.0.128.26 nodelay 0 sndbuf 65536 rcvbuf 65536 flags 00000802
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called
<br>
[compiler-2:00750] [[33912,0],0] RECV CONNECT ACK FROM UNKNOWN ON SOCKET 21
<br>
[compiler-2:00750] [[33912,0],0] waiting for connect ack from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] connect ack received from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] connect-ack recvd from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] mca_oob_tcp_recv_connect: connection from new peer
<br>
[compiler-2:00750] [[33912,0],0] connect-ack header from [[33912,0],8] is okay
<br>
[compiler-2:00750] [[33912,0],0] waiting for connect ack from [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] connect ack received from [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] connect-ack version from [[33912,0],8] matches ours
<br>
[compiler-2:00750] [[33912,0],0] connect-ack [[33912,0],8] authenticated
<br>
[compiler-2:00750] [[33912,0],0] tcp:peer_accept called for peer [[33912,0],8] in state UNKNOWN on socket 21
<br>
[compiler-2:00750] [[33912,0],0] SEND CONNECT ACK
<br>
[compiler-2:00750] [[33912,0],0] send blocking of 46 bytes to socket 21
<br>
[compiler-2:00750] [[33912,0],0] blocking send complete to socket 21
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],8] tcp_peer_connected on socket 21
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],8] accepted: 10.0.0.4 - 10.0.128.27 nodelay 0 sndbuf 65536 rcvbuf 65536 flags 00000802
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called
<br>
[compiler-2:00750] [[33912,0],0] RECV CONNECT ACK FROM UNKNOWN ON SOCKET 22
<br>
[compiler-2:00750] [[33912,0],0] waiting for connect ack from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] connect ack received from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] connect-ack recvd from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] mca_oob_tcp_recv_connect: connection from new peer
<br>
[compiler-2:00750] [[33912,0],0] connect-ack header from [[33912,0],2] is okay
<br>
[compiler-2:00750] [[33912,0],0] waiting for connect ack from [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] connect ack received from [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] connect-ack version from [[33912,0],2] matches ours
<br>
[compiler-2:00750] [[33912,0],0] connect-ack [[33912,0],2] authenticated
<br>
[compiler-2:00750] [[33912,0],0] tcp:peer_accept called for peer [[33912,0],2] in state UNKNOWN on socket 22
<br>
[compiler-2:00750] [[33912,0],0] SEND CONNECT ACK
<br>
[compiler-2:00750] [[33912,0],0] send blocking of 46 bytes to socket 22
<br>
[compiler-2:00750] [[33912,0],0] blocking send complete to socket 22
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],2] tcp_peer_connected on socket 22
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],2] accepted: 10.0.0.4 - 10.0.128.21 nodelay 0 sndbuf 65536 rcvbuf 65536 flags 00000802
<br>
[compiler-2:0075[node1-128-20:20264] [[33957,0],1] ORTE_ERROR_LOG: Not found in file runtime/orte_globals.c at line 516
<br>
[node1-128-25:14103] [[33957,0],6] ORTE_ERROR_LOG: Not found in file runtime/orte_globals.c at line 516
<br>
[node1-128-27:30025] [[33957,0],8] ORTE_ERROR_LOG: Not found in file runtime/orte_globals.c at line 516
<br>
[node1-128-23:12872] [[33957,0],4] ORTE_ERROR_LOG: Not found in file runtime/orte_globals.c at line 516
<br>
[node1-128-21:13302] [[33957,0],2] ORTE_ERROR_LOG: Not found in file runtime/orte_globals.c at line 516
<br>
srun: error: node1-128-20: task 0: Exited with exit code 1
<br>
srun: Terminating job step 665096.7
<br>
[node1-128-24:00618] [[33957,0],5] ORTE_ERROR_LOG: Not found in file runtime/orte_globals.c at line 516
<br>
[node1-128-26:31065] [[33957,0],7] ORTE_ERROR_LOG: Not found in file runtime/orte_globals.c at line 516
<br>
[node1-128-22:13413] [[33957,0],3] ORTE_ERROR_LOG: Not found in file runtime/orte_globals.c at line 516
<br>
srun: error: node1-128-25: task 5: Exited with exit code 1
<br>
srun: error: node1-128-27: task 7: Exited with exit code 1
<br>
srun: error: node1-128-23: task 3: Exited with exit code 1
<br>
srun: error: node1-128-21: task 1: Exited with exit code 1
<br>
srun: error: node1-128-24: task 4: Exited with exit code 1
<br>
srun: error: node1-128-22: task 2: Exited with exit code 1
<br>
srun: error: node1-128-26: task 6: Exited with exit code 1
<br>
handler called
<br>
[compiler-2:00750] [[33912,0],0] RECV CONNECT ACK FROM UNKNOWN ON SOCKET 24
<br>
[compiler-2:00750] [[33912,0],0] waiting for connect ack from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] connect ack received from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] connect-ack recvd from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] mca_oob_tcp_recv_connect: connection from new peer
<br>
[compiler-2:00750] [[33912,0],0] connect-ack header from [[33912,0],6] is okay
<br>
[compiler-2:00750] [[33912,0],0] waiting for connect ack from [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] connect ack received from [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] connect-ack version from [[33912,0],6] matches ours
<br>
[compiler-2:00750] [[33912,0],0] connect-ack [[33912,0],6] authenticated
<br>
[compiler-2:00750] [[33912,0],0] tcp:peer_accept called for peer [[33912,0],6] in state UNKNOWN on socket 24
<br>
[compiler-2:00750] [[33912,0],0] SEND CONNECT ACK
<br>
[compiler-2:00750] [[33912,0],0] send blocking of 46 bytes to socket 24
<br>
[compiler-2:00750] [[33912,0],0] blocking send complete to socket 24
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],6] tcp_peer_connected on socket 24
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],6] accepted: 10.0.0.4 - 10.0.128.25 nodelay 0 sndbuf 65536 rcvbuf 65536 flags 00000802
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called
<br>
[compiler-2:00750] [[33912,0],0] RECV CONNECT ACK FROM UNKNOWN ON SOCKET 25
<br>
[compiler-2:00750] [[33912,0],0] waiting for connect ack from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] connect ack received from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] connect-ack recvd from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] mca_oob_tcp_recv_connect: connection from new peer
<br>
[compiler-2:00750] [[33912,0],0] connect-ack header from [[33912,0],4] is okay
<br>
[compiler-2:00750] [[33912,0],0] waiting for connect ack from [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] connect ack received from [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] connect-ack version from [[33912,0],4] matches ours
<br>
[compiler-2:00750] [[33912,0],0] connect-ack [[33912,0],4] authenticated
<br>
[compiler-2:00750] [[33912,0],0] tcp:peer_accept called for peer [[33912,0],4] in state UNKNOWN on socket 25
<br>
[compiler-2:00750] [[33912,0],0] SEND CONNECT ACK
<br>
[compiler-2:00750] [[33912,0],0] send blocking of 46 bytes to socket 25
<br>
[compiler-2:00750] [[33912,0],0] blocking send complete to socket 25
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],4] tcp_peer_connected on socket 25
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],4] accepted: 10.0.0.4 - 10.0.128.23 nodelay 0 sndbuf 65536 rcvbuf 65536 flags 00000802
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called
<br>
[compiler-2:00750] [[33912,0],0] RECV CONNECT ACK FROM UNKNOWN ON SOCKET 26
<br>
[compiler-2:00750] [[33912,0],0] waiting for connect ack from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] connect ack received from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] connect-ack recvd from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] mca_oob_tcp_recv_connect: connection from new peer
<br>
[compiler-2:00750] [[33912,0],0] connect-ack header from [[33912,0],1] is okay
<br>
[compiler-2:00750] [[33912,0],0] waiting for connect ack from [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] connect ack received from [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] connect-ack version from [[33912,0],1] matches ours
<br>
[compiler-2:00750] [[33912,0],0] connect-ack [[33912,0],1] authenticated
<br>
[compiler-2:00750] [[33912,0],0] tcp:peer_accept called for peer [[33912,0],1] in state UNKNOWN on socket 26
<br>
[compiler-2:00750] [[33912,0],0] SEND CONNECT ACK
<br>
[compiler-2:00750] [[33912,0],0] send blocking of 46 bytes to socket 26
<br>
[compiler-2:00750] [[33912,0],0] blocking send complete to socket 26
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],1] tcp_peer_connected on socket 26
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],1] accepted: 10.0.0.4 - 10.0.128.20 nodelay 0 sndbuf 65536 rcvbuf 65536 flags 00000802
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called
<br>
[compiler-2:00750] [[33912,0],0] RECV CONNECT ACK FROM UNKNOWN ON SOCKET 27
<br>
[compiler-2:00750] [[33912,0],0] waiting for connect ack from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] connect ack received from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] connect-ack recvd from UNKNOWN
<br>
[compiler-2:00750] [[33912,0],0] mca_oob_tcp_recv_connect: connection from new peer
<br>
[compiler-2:00750] [[33912,0],0] connect-ack header from [[33912,0],3] is okay
<br>
[compiler-2:00750] [[33912,0],0] waiting for connect ack from [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] connect ack received from [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] connect-ack version from [[33912,0],3] matches ours
<br>
[compiler-2:00750] [[33912,0],0] connect-ack [[33912,0],3] authenticated
<br>
[compiler-2:00750] [[33912,0],0] tcp:peer_accept called for peer [[33912,0],3] in state UNKNOWN on socket 27
<br>
[compiler-2:00750] [[33912,0],0] SEND CONNECT ACK
<br>
[compiler-2:00750] [[33912,0],0] send blocking of 46 bytes to socket 27
<br>
[compiler-2:00750] [[33912,0],0] blocking send complete to socket 27
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],3] tcp_peer_connected on socket 27
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],3] accepted: 10.0.0.4 - 10.0.128.22 nodelay 0 sndbuf 65536 rcvbuf 65536 flags 00000802
<br>
[compiler-2:00750] [[33912,0],0] tcp:set_module called for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] tcp:set_module called for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] tcp:set_module called for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] tcp:set_module called for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] tcp:set_module called for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] tcp:set_module called for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] tcp:set_module called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] tcp:set_module called for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 108
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 108
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 108
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 108
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 108
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 108
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 14822
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 14822 BYTES FOR DEST [[33912,0],0] TAG 10
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.1;tcp://10.0.128.20,10.128.128.20:53976
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],1] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],1] address tcp://10.0.128.20,10.128.128.20:53976
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.20 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.20 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],1] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],1] is listening on net 10.0.128.20 port 53976
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],1] is listening on net 10.128.128.20 port 53976
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 108
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],7] (ORIGIN [[33912,0],7]) OF 108 BYTES FOR DEST [[33912,0],0] TAG 10
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.7;tcp://10.0.128.26,10.128.128.26:33562
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],7] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],7] address tcp://10.0.128.26,10.128.128.26:33562
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.26 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.26 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],7] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],7] is listening on net 10.0.128.26 port 33562
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],7] is listening on net 10.128.128.26 port 33562
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],2] (ORIGIN [[33912,0],2]) OF 108 BYTES FOR DEST [[33912,0],0] TAG 10
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.2;tcp://10.0.128.21,10.128.128.21:60290
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],2] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],2] address tcp://10.0.128.21,10.128.128.21:60290
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.21 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.21 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],2] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],2] is listening on net 10.0.128.21 port 60290
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],2] is listening on net 10.128.128.21 port 60290
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],8] (ORIGIN [[33912,0],8]) OF 108 BYTES FOR DEST [[33912,0],0] TAG 10
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.8;tcp://10.0.128.27,10.128.128.27:56446
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],8] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],8] address tcp://10.0.128.27,10.128.128.27:56446
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.27 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.27 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],8] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],8] is listening on net 10.0.128.27 port 56446
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],8] is listening on net 10.128.128.27 port 56446
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],5] (ORIGIN [[33912,0],5]) OF 108 BYTES FOR DEST [[33912,0],0] TAG 10
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.5;tcp://10.0.128.24,10.128.128.24:52008
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],5] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],5] address tcp://10.0.128.24,10.128.128.24:52008
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.24 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.24 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],5] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],5] is listening on net 10.0.128.24 port 52008
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],5] is listening on net 10.128.128.24 port 52008
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],6] (ORIGIN [[33912,0],6]) OF 108 BYTES FOR DEST [[33912,0],0] TAG 10
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.6;tcp://10.0.128.25,10.128.128.25:45828
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],6] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],6] address tcp://10.0.128.25,10.128.128.25:45828
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.25 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.25 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],6] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],6] is listening on net 10.0.128.25 port 45828
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],6] is listening on net 10.128.128.25 port 45828
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],4] (ORIGIN [[33912,0],4]) OF 108 BYTES FOR DEST [[33912,0],0] TAG 10
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.4;tcp://10.0.128.23,10.128.128.23:53888
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],4] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],4] address tcp://10.0.128.23,10.128.128.23:53888
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.23 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.23 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],4] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],4] is listening on net 10.0.128.23 port 53888
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],4] is listening on net 10.128.128.23 port 53888
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],3] (ORIGIN [[33912,0],3]) OF 108 BYTES FOR DEST [[33912,0],0] TAG 10
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.3;tcp://10.0.128.22,10.128.128.22:56536
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],3] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],3] address tcp://10.0.128.22,10.128.128.22:56536
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.22 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.22 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],3] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],3] is listening on net 10.0.128.22 port 56536
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],3] is listening on net 10.128.128.22 port 56536
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.0;tcp://10.0.251.53,10.0.0.4,10.2.251.14,10.128.0.4,93.180.7.38:37873
<br>
[compiler-2:00750] [[33912,0],0]:set_addr peer [[33912,0],0] is me
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.1;tcp://10.0.128.20,10.128.128.20:53976
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],1] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],1] address tcp://10.0.128.20,10.128.128.20:53976
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.20 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.20 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],1] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.2;tcp://10.0.128.21,10.128.128.21:60290
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],2] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],2] address tcp://10.0.128.21,10.128.128.21:60290
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.21 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.21 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],2] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.3;tcp://10.0.128.22,10.128.128.22:56536
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],3] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],3] address tcp://10.0.128.22,10.128.128.22:56536
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.22 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.22 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],3] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.4;tcp://10.0.128.23,10.128.128.23:53888
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],4] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],4] address tcp://10.0.128.23,10.128.128.23:53888
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.23 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.23 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],4] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.5;tcp://10.0.128.24,10.128.128.24:52008
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],5] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],5] address tcp://10.0.128.24,10.128.128.24:52008
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.24 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.24 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],5] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.6;tcp://10.0.128.25,10.128.128.25:45828
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],6] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],6] address tcp://10.0.128.25,10.128.128.25:45828
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.25 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.25 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],6] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.7;tcp://10.0.128.26,10.128.128.26:33562
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],7] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],7] address tcp://10.0.128.26,10.128.128.26:33562
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.26 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.26 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],7] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0]: set_addr to uri 2222456832.8;tcp://10.0.128.27,10.128.128.27:56446
<br>
[compiler-2:00750] [[33912,0],0]:set_addr checking if peer [[33912,0],8] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp: working peer [[33912,0],8] address tcp://10.0.128.27,10.128.128.27:56446
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.0.128.27 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] PASSING ADDR 10.128.128.27 TO MODULE
<br>
[compiler-2:00750] [[33912,0],0]:tcp set addr for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]: peer [[33912,0],8] is reachable via component tcp
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],1] is listening on net 10.0.128.20 port 53976
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],1] is listening on net 10.128.128.20 port 53976
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],2] is listening on net 10.0.128.21 port 60290
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],2] is listening on net 10.128.128.21 port 60290
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],3] is listening on net 10.0.128.22 port 56536
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],3] is listening on net 10.128.128.22 port 56536
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],4] is listening on net 10.0.128.23 port 53888
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],4] is listening on net 10.128.128.23 port 53888
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],5] is listening on net 10.0.128.24 port 52008
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],5] is listening on net 10.128.128.24 port 52008
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],6] is listening on net 10.0.128.25 port 45828
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],6] is listening on net 10.128.128.25 port 45828
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],7] is listening on net 10.0.128.26 port 33562
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],7] is listening on net 10.128.128.26 port 33562
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],8] is listening on net 10.0.128.27 port 56446
<br>
[compiler-2:00750] [[33912,0],0]:tcp:processing set_peer cmd
<br>
[compiler-2:00750] [[33912,0],0] set_peer: peer [[33912,0],8] is listening on net 10.128.128.27 port 56446
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],1]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],2]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],3]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],4]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],5]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],6]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],7]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],8]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],1]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],1] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],2]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],2] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],3]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],3] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],4]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],4] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],5]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],5] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],6]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],6] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],7]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],7] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],8]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],8] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],1] OF 1455 BYTES ON SOCKET 26
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],2] OF 1455 BYTES ON SOCKET 22
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],3] OF 1455 BYTES ON SOCKET 27
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],4] OF 1455 BYTES ON SOCKET 25
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],5] OF 1455 BYTES ON SOCKET 23
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],6] OF 1455 BYTES ON SOCKET 24
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],7] OF 1455 BYTES ON SOCKET 20
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],8] OF 1455 BYTES ON SOCKET 21
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 21
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 21
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 21
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 21
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 21
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 21
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 21
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 54
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],2] (ORIGIN [[33912,0],2]) OF 21 BYTES FOR DEST [[33912,0],0] TAG 5
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],4] (ORIGIN [[33912,0],4]) OF 21 BYTES FOR DEST [[33912,0],0] TAG 5
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],5] (ORIGIN [[33912,0],5]) OF 21 BYTES FOR DEST [[33912,0],0] TAG 5
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],6] (ORIGIN [[33912,0],6]) OF 21 BYTES FOR DEST [[33912,0],0] TAG 5
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],7] (ORIGIN [[33912,0],7]) OF 21 BYTES FOR DEST [[33912,0],0] TAG 5
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],3] (ORIGIN [[33912,0],3]) OF 21 BYTES FOR DEST [[33912,0],0] TAG 5
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],8] (ORIGIN [[33912,0],8]) OF 21 BYTES FOR DEST [[33912,0],0] TAG 5
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 54 BYTES FOR DEST [[33912,0],0] TAG 5
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 21
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 21 BYTES FOR DEST [[33912,0],0] TAG 5
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 181
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 181 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[warn] Epoll ADD(4) on fd 2 failed.  Old events were 0; read change was 0 (none); write change was 1 (add): Operation not permitted
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 117
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 117 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 389
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 389 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 78
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 78 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 88
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 88 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 478
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 478 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 90
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 90 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 142
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 142 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 84
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 84 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 124
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 124 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 127
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 127 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 351
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 351 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 481
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 481 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 130
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 130 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 390
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 390 BYTES FOR DEST [[33912,0],0] TAG 33
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],1]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],2]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],3]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],4]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],5]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],6]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],7]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],8]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],1]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],1] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],2]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],2] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],3]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],3] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],4]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],4] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],5]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],5] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],6]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],6] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],7]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],7] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],8]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],8] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],1] OF 448 BYTES ON SOCKET 26
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],2] OF 448 BYTES ON SOCKET 22
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],3] OF 448 BYTES ON SOCKET 27
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],4] OF 448 BYTES ON SOCKET 25
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],5] OF 448 BYTES ON SOCKET 23
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],6] OF 448 BYTES ON SOCKET 24
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],7] OF 448 BYTES ON SOCKET 20
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],8] OF 448 BYTES ON SOCKET 21
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 29
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 29 BYTES FOR DEST [[33912,0],0] TAG 33
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],1]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],2]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],3]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],4]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],5]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],6]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],7]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],8]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],1]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],1] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],2]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],2] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],3]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],3] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],4]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],4] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],5]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],5] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],6]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],6] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],7]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],7] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],8]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],8] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],1] OF 87 BYTES ON SOCKET 26
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],2] OF 87 BYTES ON SOCKET 22
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],3] OF 87 BYTES ON SOCKET 27
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],4] OF 87 BYTES ON SOCKET 25
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],5] OF 87 BYTES ON SOCKET 23
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],6] OF 87 BYTES ON SOCKET 24
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],7] OF 87 BYTES ON SOCKET 20
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],8] OF 87 BYTES ON SOCKET 21
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 29
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 29 BYTES FOR DEST [[33912,0],0] TAG 33
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],1]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],2]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],3]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],4]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],5]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],6]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],7]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],8]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],1]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],1] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],2]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],2] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],3]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],3] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],4]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],4] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],5]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],5] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],6]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],6] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],7]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],7] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],8]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],8] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 201
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 201 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],1] OF 87 BYTES ON SOCKET 26
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],2] OF 87 BYTES ON SOCKET 22
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],3] OF 87 BYTES ON SOCKET 27
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],4] OF 87 BYTES ON SOCKET 25
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],5] OF 87 BYTES ON SOCKET 23
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],6] OF 87 BYTES ON SOCKET 24
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],7] OF 87 BYTES ON SOCKET 20
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],8] OF 87 BYTES ON SOCKET 21
<br>
[warn] Epoll ADD(4) on fd 1 failed.  Old events were 0; read change was 0 (none); write change was 1 (add): Operation not permitted
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 69
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 69 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 212
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 212 BYTES FOR DEST [[33912,0],0] TAG 2
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate data region of size 54
<br>
[compiler-2:00750] [[33912,0],0] RECVD COMPLETE MESSAGE FROM [[33912,0],1] (ORIGIN [[33912,0],1]) OF 54 BYTES FOR DEST [[33912,0],0] TAG 5
<br>
[compiler-2:00750] [[33912,0],0] DELIVERING TO RML
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] OOB_SEND: rml_oob_send.c:199
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],1]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],2]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],3]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],4]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],5]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],6]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],7]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send to target [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] oob:base:send known transport for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] oob:tcp:send_nb to peer [[33912,0],8]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb to peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:478] post send to [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],1]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],1] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],2]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],2] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],3]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],3] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],4]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],4] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],5]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],5] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],6]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],6] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],7]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],7] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:415] processing send to peer [[33912,0],8]:15
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_nb: already connected to [[33912,0],8] - queueing for send
<br>
[compiler-2:00750] [[33912,0],0]:[oob_tcp.c:442] queue send to [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],1] OF 30 BYTES ON SOCKET 26
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],2] OF 30 BYTES ON SOCKET 22
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],3] OF 30 BYTES ON SOCKET 27
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],4] OF 30 BYTES ON SOCKET 25
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],5] OF 30 BYTES ON SOCKET 23
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],6] OF 30 BYTES ON SOCKET 24
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],7] OF 30 BYTES ON SOCKET 20
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler called to send to peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] tcp:send_handler SENDING TO [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] MESSAGE SEND COMPLETE TO [[33912,0],8] OF 30 BYTES ON SOCKET 21
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],2] mca_oob_tcp_msg_recv: peer closed connection
<br>
[compiler-2:00750] [[33912,0],0] tcp_peer_close for [[33912,0],2] sd 22 state CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],3] mca_oob_tcp_msg_recv: peer closed connection
<br>
[compiler-2:00750] [[33912,0],0] tcp_peer_close for [[33912,0],3] sd 27 state CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] tcp:lost connection called for peer [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] tcp:lost connection called for peer [[33912,0],3]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],4] mca_oob_tcp_msg_recv: peer closed connection
<br>
[compiler-2:00750] [[33912,0],0] tcp_peer_close for [[33912,0],4] sd 25 state CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],5] mca_oob_tcp_msg_recv: peer closed connection
<br>
[compiler-2:00750] [[33912,0],0] tcp_peer_close for [[33912,0],5] sd 23 state CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],6] mca_oob_tcp_msg_recv: peer closed connection
<br>
[compiler-2:00750] [[33912,0],0] tcp_peer_close for [[33912,0],6] sd 24 state CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],8] mca_oob_tcp_msg_recv: peer closed connection
<br>
[compiler-2:00750] [[33912,0],0] tcp_peer_close for [[33912,0],8] sd 21 state CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],7] mca_oob_tcp_msg_recv: peer closed connection
<br>
[compiler-2:00750] [[33912,0],0] tcp_peer_close for [[33912,0],7] sd 20 state CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] tcp:lost connection called for peer [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] tcp:lost connection called for peer [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] tcp:lost connection called for peer [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] tcp:lost connection called for peer [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] tcp:lost connection called for peer [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler called for peer [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler CONNECTED
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler allocate new recv msg
<br>
[compiler-2:00750] [[33912,0],0]:tcp:recv:handler read hdr
<br>
[compiler-2:00750] [[33912,0],0]-[[33912,0],1] mca_oob_tcp_msg_recv: peer closed connection
<br>
[compiler-2:00750] [[33912,0],0] tcp_peer_close for [[33912,0],1] sd 26 state CONNECTED
<br>
[compiler-2:00750] [[33912,0],0] tcp:lost connection called for peer [[33912,0],1]
<br>
Hello, world, I am 0 of 1, (Open MPI v1.9a1, package: Open MPI semenov_at_compiler-2 Distribution, ident: 1.9a1r32570, repo rev: r32570, Aug 21, 2014 (nightly snapshot tarball), 146)
<br>
[node1-128-20:20405] mca: base: components_register: registering oob components
<br>
[node1-128-20:20405] mca: base: components_register: found loaded component tcp
<br>
[node1-128-20:20405] mca: base: components_register: component tcp register function successful
<br>
[node1-128-20:20405] mca: base: components_open: opening oob components
<br>
[node1-128-20:20405] mca: base: components_open: found loaded component tcp
<br>
[node1-128-20:20405] mca: base: components_open: component tcp open function successful
<br>
[node1-128-20:20405] mca:oob:select: checking available component tcp
<br>
[node1-128-20:20405] mca:oob:select: Querying component [tcp]
<br>
[node1-128-20:20405] oob:tcp: component_available called
<br>
[node1-128-20:20405] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[node1-128-20:20405] [[33912,1],0] oob:tcp:init rejecting loopback interface lo
<br>
[node1-128-20:20405] WORKING INTERFACE 2 KERNEL INDEX 3 FAMILY: V4
<br>
[node1-128-20:20405] [[33912,1],0] oob:tcp:init adding 10.0.128.20 to our list of V4 connections
<br>
[node1-128-20:20405] WORKING INTERFACE 3 KERNEL INDEX 4 FAMILY: V4
<br>
[node1-128-20:20405] [[33912,1],0] oob:tcp:init adding 10.128.128.20 to our list of V4 connections
<br>
[node1-128-20:20405] [[33912,1],0] TCP STARTUP
<br>
[node1-128-20:20405] [[33912,1],0] attempting to bind to IPv4 port 0
<br>
[node1-128-20:20405] [[33912,1],0] assigned IPv4 port 41140
<br>
[node1-128-20:20405] mca:oob:select: Adding component to end
<br>
[node1-128-20:20405] mca:oob:select: Found 1 active transports
<br>
[node1-128-20:20405] [[33912,1],0]: set_addr to uri 2222456832.1;tcp://10.0.128.20,10.128.128.20:53976
<br>
[node1-128-20:20405] [[33912,1],0]:set_addr checking if peer [[33912,0],1] is reachable via component tcp
<br>
[node1-128-20:20405] [[33912,1],0] oob:tcp: working peer [[33912,0],1] address tcp://10.0.128.20,10.128.128.20:53976
<br>
[node1-128-20:20405] [[33912,1],0] PASSING ADDR 10.0.128.20 TO MODULE
<br>
[node1-128-20:20405] [[33912,1],0]:tcp set addr for peer [[33912,0],1]
<br>
[node1-128-20:20405] [[33912,1],0] PASSING ADDR 10.128.128.20 TO MODULE
<br>
[node1-128-20:20405] [[33912,1],0]:tcp set addr for peer [[33912,0],1]
<br>
[node1-128-20:20405] [[33912,1],0]: peer [[33912,0],1] is reachable via component tcp
<br>
[node1-128-20:20405] [[33912,1],0]:tcp:processing set_peer cmd
<br>
[node1-128-20:20405] [[33912,1],0] SET_PEER ADDING PEER [[33912,0],1]
<br>
[node1-128-20:20405] [[33912,1],0] set_peer: peer [[33912,0],1] is listening on net 10.0.128.20 port 53976
<br>
[node1-128-20:20405] [[33912,1],0]:tcp:processing set_peer cmd
<br>
[node1-128-20:20405] [[33912,1],0] set_peer: peer [[33912,0],1] is listening on net 10.128.128.20 port 53976
<br>
[node1-128-20:20405] [[33912,1],0] TCP SHUTDOWN
<br>
[node1-128-20:20405] [[33912,1],0] RELEASING PEER OBJ [[33912,0],1]
<br>
[node1-128-20:20405] mca: base: close: component tcp closed
<br>
[node1-128-20:20405] mca: base: close: unloading component tcp
<br>
[compiler-2:00750] [[33912,0],0] TCP SHUTDOWN
<br>
[compiler-2:00750] [[33912,0],0] RELEASING PEER OBJ [[33912,0],8]
<br>
[compiler-2:00750] [[33912,0],0] RELEASING PEER OBJ [[33912,0],2]
<br>
[compiler-2:00750] [[33912,0],0] RELEASING PEER OBJ [[33912,0],7]
<br>
[compiler-2:00750] [[33912,0],0] RELEASING PEER OBJ [[33912,0],1]
<br>
[compiler-2:00750] [[33912,0],0] RELEASING PEER OBJ [[33912,0],6]
<br>
[compiler-2:00750] [[33912,0],0] RELEASING PEER OBJ [[33912,0],5]
<br>
[compiler-2:00750] [[33912,0],0] RELEASING PEER OBJ [[33912,0],4]
<br>
[compiler-2:00750] [[33912,0],0] RELEASING PEER OBJ [[33912,0],3]
<br>
[compiler-2:00750] mca: base: close: component tcp closed
<br>
[compiler-2:00750] mca: base: close: unloading component tcp
<br>

<br><p>
[compiler-2:00793] mca: base: components_register: registering oob components
<br>
[compiler-2:00793] mca: base: components_register: found loaded component tcp
<br>
[compiler-2:00793] mca: base: components_register: component tcp register function successful
<br>
[compiler-2:00793] mca: base: components_open: opening oob components
<br>
[compiler-2:00793] mca: base: components_open: found loaded component tcp
<br>
[compiler-2:00793] mca: base: components_open: component tcp open function successful
<br>
[compiler-2:00793] mca:oob:select: checking available component tcp
<br>
[compiler-2:00793] mca:oob:select: Querying component [tcp]
<br>
[compiler-2:00793] oob:tcp: component_available called
<br>
[compiler-2:00793] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[compiler-2:00793] [[34191,0],0] oob:tcp:init rejecting interface lo (not in include list)
<br>
[compiler-2:00793] WORKING INTERFACE 2 KERNEL INDEX 3 FAMILY: V4
<br>
[compiler-2:00793] [[34191,0],0] oob:tcp:init rejecting interface eth1 (not in include list)
<br>
[compiler-2:00793] WORKING INTERFACE 3 KERNEL INDEX 4 FAMILY: V4
<br>
[compiler-2:00793] [[34191,0],0] oob:tcp:init rejecting interface eth2 (not in include list)
<br>
[compiler-2:00793] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
<br>
[compiler-2:00793] [[34191,0],0] oob:tcp:init rejecting interface eth3 (not in include list)
<br>
[compiler-2:00793] WORKING INTERFACE 5 KERNEL INDEX 6 FAMILY: V4
<br>
[compiler-2:00793] [[34191,0],0] oob:tcp:init adding 10.128.0.4 to our list of V4 connections
<br>
[compiler-2:00793] WORKING INTERFACE 6 KERNEL INDEX 7 FAMILY: V4
<br>
[compiler-2:00793] [[34191,0],0] oob:tcp:init rejecting interface eth2.911 (not in include list)
<br>
[compiler-2:00793] [[34191,0],0] TCP STARTUP
<br>
[compiler-2:00793] [[34191,0],0] attempting to bind to IPv4 port 0
<br>
[compiler-2:00793] [[34191,0],0] assigned IPv4 port 46598
<br>
[compiler-2:00793] mca:oob:select: Adding component to end
<br>
[compiler-2:00793] mca:oob:select: Found 1 active transports
<br>
--------------------------------------------------------------------------
<br>
WARNING: An invalid value was given for oob_tcp_if_include.  This
<br>
value will be ignored.
<br>
<p>&nbsp;&nbsp;Local host: node1-128-26
<br>
&nbsp;&nbsp;Value:      &quot;ib0&quot;
<br>
&nbsp;&nbsp;Message:    Invalid specification (missing &quot;/&quot;)
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: An invalid value was given for oob_tcp_if_include.  This
<br>
value will be ignored.
<br>
<p>&nbsp;&nbsp;Local host: node1-128-27
<br>
&nbsp;&nbsp;Value:      &quot;ib0&quot;
<br>
&nbsp;&nbsp;Message:    Invalid specification (missing &quot;/&quot;)
<br>
--------------------------------------------------------------------------
<br>
srun: error: node1-128-26: task 6: Exited with exit code 213
<br>
srun: Terminating job step 665096.12
<br>
--------------------------------------------------------------------------
<br>
WARNING: An invalid value was given for oob_tcp_if_include.  This
<br>
value will be ignored.
<br>
<p>&nbsp;&nbsp;Local host: node1-128-21
<br>
&nbsp;&nbsp;Value:      &quot;ib0&quot;
<br>
&nbsp;&nbsp;Message:    Invalid specification (missing &quot;/&quot;)
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: An invalid value was given for oob_tcp_if_include.  This
<br>
value will be ignored.
<br>
<p>&nbsp;&nbsp;Local host: node1-128-20
<br>
&nbsp;&nbsp;Value:      &quot;ib0&quot;
<br>
&nbsp;&nbsp;Message:    Invalid specification (missing &quot;/&quot;)
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: An invalid value was given for oob_tcp_if_include.  This
<br>
value will be ignored.
<br>
<p>&nbsp;&nbsp;Local host: node1-128-22
<br>
&nbsp;&nbsp;Value:      &quot;ib0&quot;
<br>
&nbsp;&nbsp;Message:    Invalid specification (missing &quot;/&quot;)
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
None of the TCP networks specified to be included for out-of-band communications
<br>
could be found:
<br>
<p>&nbsp;&nbsp;Value given: 
<br>
<p>Please revise the specification and try again.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
No network interfaces were found for out-of-band communications. We require
<br>
at least one available network for out-of-band messaging.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_oob_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value (null) (-43) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
srun: error: node1-128-27: task 7: Exited with exit code 213
<br>
--------------------------------------------------------------------------
<br>
WARNING: An invalid value was given for oob_tcp_if_include.  This
<br>
srun: error: node1-128-21: task 1: Exited with exit code 213
<br>
value will be ignored.
<br>
<p>&nbsp;&nbsp;Local host: node1-128-24
<br>
&nbsp;&nbsp;Value:      &quot;ib0&quot;
<br>
&nbsp;&nbsp;Message:    Invalid specification (missing &quot;/&quot;)
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
None of the TCP networks specified to be included for out-of-band communications
<br>
could be found:
<br>
<p>&nbsp;&nbsp;Value given: 
<br>
<p>Please revise the specification and try again.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
No network interfaces were found for out-of-band communications. We require
<br>
at least one available network for out-of-band messaging.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: An invalid value was given for oob_tcp_if_include.  This
<br>
value will be ignored.
<br>
<p>&nbsp;&nbsp;Local host: node1-128-25
<br>
&nbsp;&nbsp;Value:      &quot;ib0&quot;
<br>
&nbsp;&nbsp;Message:    Invalid specification (missing &quot;/&quot;)
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_oob_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value (null) (-43) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
None of the TCP networks specified to be included for out-of-band communications
<br>
could be found:
<br>
<p>&nbsp;&nbsp;Value given: 
<br>
<p>Please revise the specification and try again.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
No network interfaces were found for out-of-band communications. We require
<br>
at least one available network for out-of-band messaging.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_oob_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value (null) (-43) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
slurmd[node1-128-23]: *** STEP 665096.12 KILLED AT 2014-08-28T12:51:42 WITH SIGNAL 9 ***
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
None of the TCP networks specified to be included for out-of-band communications
<br>
could be found:
<br>
<p>&nbsp;&nbsp;Value given: 
<br>
<p>Please revise the specification and try again.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
No network interfaces were found for out-of-band communications. We require
<br>
at least one available network for out-of-band messaging.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_oob_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value (null) (-43) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
srun: Job step aborted: Waiting up to 2 seconds for job step to finish.
<br>
srun: error: node1-128-20: task 0: Exited with exit code 213
<br>
srun: error: node1-128-22: task 2: Exited with exit code 213
<br>
srun: error: node1-128-24: task 4: Killed
<br>
srun: error: node1-128-23: task 3: Killed
<br>
srun: error: node1-128-25: task 5: Exited with exit code 213
<br>
--------------------------------------------------------------------------
<br>
An ORTE daemon has unexpectedly failed after launch and before
<br>
communicating back to mpirun. This could be caused by a number
<br>
of factors, including an inability to create a connection back
<br>
to mpirun due to a lack of common network interfaces and/or no
<br>
route found between them. Please check network connectivity
<br>
(including firewalls and network routing requirements).
<br>
--------------------------------------------------------------------------
<br>
[compiler-2:00793] [[34191,0],0] TCP SHUTDOWN
<br>
[compiler-2:00793] mca: base: close: component tcp closed
<br>
[compiler-2:00793] mca: base: close: unloading component tcp
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25177/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25178.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
<li><strong>Previous message:</strong> <a href="25176.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots (updated findings)"</a>
<li><strong>In reply to:</strong> <a href="25167.php">Ralph Castain: "Re: [OMPI users] long initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25178.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
<li><strong>Reply:</strong> <a href="25178.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
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
