<?
$subject_val = "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 11 19:48:35 2012" -->
<!-- isoreceived="20120611234835" -->
<!-- sent="Mon, 11 Jun 2012 16:48:11 -0700" -->
<!-- isosent="20120611234811" -->
<!-- name="Yong Qin" -->
<!-- email="yong.qin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6" -->
<!-- id="CADEJBEWQMP9CngikKhGtwApStw_r4EPdO7KtjY7MkKhvjTt1kA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="136E8A8D-EADF-4D42-9EAF-645DC6566EBA_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6<br>
<strong>From:</strong> Yong Qin (<em>yong.qin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-11 19:48:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19502.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : RE : Bug when mixing sent types	in	version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19500.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19499.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19589.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19589.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ah, I guess my original understanding of PML was wrong. Adding &quot;-mca
<br>
pml ob1&quot; does help to ease the problem. But the question still
<br>
remains. Why ompi decided to use the mx BTL in the first place, given
<br>
there's no physical device onboard at all? This behavior is completely
<br>
different than the original gm BTL.
<br>
<p>Thanks,
<br>
<p>Yong Qin
<br>
<p>On Mon, Jun 11, 2012 at 3:59 PM, Aur&#233;lien Bouteiller
<br>
&lt;bouteill_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 11 juin 2012 &#224; 18:57, Aur&#233;lien Bouteiller a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If some mx devices are found, the logic is not only to use the mx BTL but also to use the mx MTL. You can try to disable this with --mca mtl ob1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I meant --mca pml ob1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 11 juin 2012 &#224; 18:24, Yong Qin a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are migrating to Open MPI 1.6 but since 1.6 dropped support for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Myricom GM driver so we have to switch to the MX driver. We have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Myricom MX2G 1.2.16 driver installed. However upon testing the new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build of Open MPI on a node without the actual Myrinet device, we are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting the following segmentation fault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;----&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [yqin_at_n0007.scs00 ~]$ mpirun -np 2 &#160;-np 2 osu_bw
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007.scs00:03075] Error in mx_open_endpoint (error No MX device
</span><br>
<span class="quotelev3">&gt;&gt;&gt; entry in /dev.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007.scs00:03074] Error in mx_open_endpoint (error No MX device
</span><br>
<span class="quotelev3">&gt;&gt;&gt; entry in /dev.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[32626,1],0]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Module: Myrinet/MX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: n0007.scs00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03074] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03074] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03074] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03074] Failing at address: 0x2b9112128130
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03075] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03075] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03075] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03075] Failing at address: 0x2b041c9f1130
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 3075 on node n0007.scs00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007.scs00:03073] 1 more process has sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007.scs00:03073] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to see all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;----&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Excluding the MX BTL does not get anywhere further.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;----&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [yqin_at_n0007.scs00 ~]$ mpirun -np 2 -mca btl ^mx -np 2 osu_bw
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007.scs00:03453] Error in mx_open_endpoint (error No MX device
</span><br>
<span class="quotelev3">&gt;&gt;&gt; entry in /dev.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007.scs00:03454] Error in mx_open_endpoint (error No MX device
</span><br>
<span class="quotelev3">&gt;&gt;&gt; entry in /dev.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03453] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03453] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03453] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03453] Failing at address: 0x2b3c1fe73130
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03454] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03454] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03454] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03454] Failing at address: 0x2b2431bf0130
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 3454 on node n0007.scs00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;----&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If we use only designated BTL such as SM and SELF, the binary runs but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; still getting segmentation fault towards the end.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;----&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [yqin_at_n0007.scs00 ~]$ mpirun -np 2 -mca btl sm,self -np 2 osu_bw
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007.scs00:03460] Error in mx_open_endpoint (error No MX device
</span><br>
<span class="quotelev3">&gt;&gt;&gt; entry in /dev.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007.scs00:03461] Error in mx_open_endpoint (error No MX device
</span><br>
<span class="quotelev3">&gt;&gt;&gt; entry in /dev.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # OSU MPI Bandwidth Test v3.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Size &#160; &#160; &#160; &#160;Bandwidth (MB/s)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 2.54
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 5.22
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;10.92
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;21.61
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 43.89
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 62.19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 64 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;121.95
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 128 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 212.28
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 256 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 337.52
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 512 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 516.67
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1024 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;701.29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2048 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;845.69
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4096 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;836.45
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8192 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;934.31
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16384 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;1035.53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32768 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;1186.90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 65536 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;1390.41
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 131072 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 1519.14
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 262144 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 1562.96
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 524288 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 1596.78
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1048576 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;1611.48
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2097152 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;1616.09
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4194304 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;1620.47
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03461] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03460] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03460] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03460] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03460] Failing at address: 0x2acac044d130
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03461] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03461] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0007:03461] Failing at address: 0x2b8bc4121130
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 3460 on node n0007.scs00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;----&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anybody shed some light here? It looks like ompi is trying to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the MX device no matter what. This is on a fresh build of Open MPI 1.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with &quot;--with-mx --with-openib&quot; options. We didn't have such an issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the old GM BTL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yong Qin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev2">&gt;&gt; * Researcher at Innovative Computing Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; * University of Tennessee
</span><br>
<span class="quotelev2">&gt;&gt; * 1122 Volunteer Boulevard, suite 309b
</span><br>
<span class="quotelev2">&gt;&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev2">&gt;&gt; * 865 974 9375
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; * Researcher at Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; * University of Tennessee
</span><br>
<span class="quotelev1">&gt; * 1122 Volunteer Boulevard, suite 309b
</span><br>
<span class="quotelev1">&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; * 865 974 9375
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19502.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : RE : Bug when mixing sent types	in	version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19500.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19499.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19589.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19589.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
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
