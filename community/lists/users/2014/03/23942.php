<?
$subject_val = "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 10:25:13 2014" -->
<!-- isoreceived="20140324142513" -->
<!-- sent="Mon, 24 Mar 2014 14:25:11 +0000" -->
<!-- isosent="20140324142511" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: problem for multiple clusters using mpirun" -->
<!-- id="60EC5A4D-7829-4012-8440-60D2B6B75071_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAADBNWxR_qKNJOd-UYyBn4GmnW+JR8-TkenViExfVxHkfb9pNg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: problem for multiple clusters using mpirun<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-24 10:25:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23943.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23941.php">tmishima_at_[hidden]: "[OMPI users] cleanup of round robin mappers"</a>
<li><strong>In reply to:</strong> <a href="23940.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23943.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Reply:</strong> <a href="23943.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you you use btl_tcp_if_exclude, you also need to exclude the loopback interface.  Loopback is excluded by the default value of btl_tcp_if_exclude, but if you overwrite that value, then you need to *also* include the loopback interface in the new value.
<br>
<p><p><p>On Mar 24, 2014, at 4:57 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; Still i am facing problems.
</span><br>
<span class="quotelev1">&gt; I checked there is no firewall which is acting as a barrier for the mpi communication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; even i used the execution line like
</span><br>
<span class="quotelev1">&gt; hsaeed_at_karp:~/Task4_mpi/scatterv$ mpiexec -n 2 --mca btl_tcp_if_exclude br2 -host wirth,karp ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the output hangup without displaying any error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Used &quot;..exclude bt2&quot; because the failed connection was from bt2 as you can see in the &quot;ifconfig&quot; output mentioned above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know there is something wrong but i am almost unable to figure it out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need some more kind suggestions. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 21, 2014 at 6:05 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Do you have any firewalling enabled on these machines?  If so, you'll want to either disable it, or allow random TCP connections between any of the cluster nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2014, at 10:24 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /sbin/ifconfig
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hsaeed_at_karp:~$ /sbin/ifconfig
</span><br>
<span class="quotelev2">&gt; &gt; br0       Link encap:Ethernet  HWaddr 00:25:90:59:c9:ba
</span><br>
<span class="quotelev2">&gt; &gt;           inet addr:134.106.3.231  Bcast:134.106.3.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt; &gt;           inet6 addr: fe80::225:90ff:fe59:c9ba/64 Scope:Link
</span><br>
<span class="quotelev2">&gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;           RX packets:49080961 errors:0 dropped:50263 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;           TX packets:43279252 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt; &gt;           RX bytes:41348407558 (38.5 GiB)  TX bytes:80505842745 (74.9 GiB)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; br1       Link encap:Ethernet  HWaddr 00:25:90:59:c9:bb
</span><br>
<span class="quotelev2">&gt; &gt;           inet addr:134.106.53.231  Bcast:134.106.53.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt; &gt;           inet6 addr: fe80::225:90ff:fe59:c9bb/64 Scope:Link
</span><br>
<span class="quotelev2">&gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;           RX packets:41573060 errors:0 dropped:50261 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;           TX packets:1693509 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt; &gt;           RX bytes:6177072160 (5.7 GiB)  TX bytes:230617435 (219.9 MiB)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; br2       Link encap:Ethernet  HWaddr 00:c0:0a:ec:02:e7
</span><br>
<span class="quotelev2">&gt; &gt;           inet addr:10.231.2.231  Bcast:10.231.2.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt; &gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt; &gt;           RX bytes:0 (0.0 B)  TX bytes:0 (0.0 B)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; eth0      Link encap:Ethernet  HWaddr 00:25:90:59:c9:ba
</span><br>
<span class="quotelev2">&gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;           RX packets:69108377 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;           TX packets:86459066 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt; &gt;           RX bytes:43533091399 (40.5 GiB)  TX bytes:83359370885 (77.6 GiB)
</span><br>
<span class="quotelev2">&gt; &gt;           Memory:dfe60000-dfe80000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; eth1      Link encap:Ethernet  HWaddr 00:25:90:59:c9:bb
</span><br>
<span class="quotelev2">&gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;           RX packets:43531546 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;           TX packets:1716151 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt; &gt;           RX bytes:7201915977 (6.7 GiB)  TX bytes:232026383 (221.2 MiB)
</span><br>
<span class="quotelev2">&gt; &gt;           Memory:dfee0000-dff00000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt; &gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt; &gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev2">&gt; &gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;           RX packets:10890707 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;           TX packets:10890707 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt; &gt;           RX bytes:36194379576 (33.7 GiB)  TX bytes:36194379576 (33.7 GiB)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tap0      Link encap:Ethernet  HWaddr 00:c0:0a:ec:02:e7
</span><br>
<span class="quotelev2">&gt; &gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;           collisions:0 txqueuelen:500
</span><br>
<span class="quotelev2">&gt; &gt;           RX bytes:0 (0.0 B)  TX bytes:0 (0.0 B)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When i execute the following line
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hsaeed_at_karp:~/Task4_mpi/scatterv$ mpiexec -n 2 -host wirth,karp ./a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i receive Error
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [wirth][[59430,1],0][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect] connect() to 10.231.2.231 failed: Connection refused (111)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; NOTE: Karp and wirth are two machines on ssh cluster.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Mar 21, 2014 at 3:13 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 21, 2014, at 10:09 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I think i have a tcp connection. As for as i know my cluster is not configured for Infiniband (IB).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ok.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; but even for tcp connections.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mpirun -n 2 -host master,node001 --mca btl tcp,sm,self ./helloworldmpi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mpirun -n 2 -host master,node001 ./helloworldmpi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; These line are not working they output
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Error like
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect] connect() to xx.xxx.x.xxx failed: Connection refused (111)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What are the IP addresses reported by connect()?  (i.e., the address you X'ed out)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Send the output from ifconfig on each of your servers.  Note that some Linux distributions do not put ifconfig in the default PATH of normal users; look for it in/sbin/ifconfig or /usr/sbin/ifconfig.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Hamid Saeed
</span><br>
<span class="quotelev2">&gt; &gt; CoSynth GmbH &amp; Co. KG
</span><br>
<span class="quotelev2">&gt; &gt; Escherweg 2 - 26121 Oldenburg - Germany
</span><br>
<span class="quotelev2">&gt; &gt; Tel +49 441 9722 738 | Fax -278
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cosynth.com">http://www.cosynth.com</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; Hamid Saeed
</span><br>
<span class="quotelev1">&gt; CoSynth GmbH &amp; Co. KG
</span><br>
<span class="quotelev1">&gt; Escherweg 2 - 26121 Oldenburg - Germany
</span><br>
<span class="quotelev1">&gt; Tel +49 441 9722 738 | Fax -278
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cosynth.com">http://www.cosynth.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23943.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23941.php">tmishima_at_[hidden]: "[OMPI users] cleanup of round robin mappers"</a>
<li><strong>In reply to:</strong> <a href="23940.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23943.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Reply:</strong> <a href="23943.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
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
