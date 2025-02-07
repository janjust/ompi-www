<?
$subject_val = "Re: [OMPI users] how to find the binding of each rank on the local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 10 16:41:38 2013" -->
<!-- isoreceived="20130210214138" -->
<!-- sent="Sun, 10 Feb 2013 22:41:31 +0100" -->
<!-- isosent="20130210214131" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to find the binding of each rank on the local machine" -->
<!-- id="5118140B.3080708_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D6C9DC2C-6F91-4122-A7BF-114DB4924F8C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to find the binding of each rank on the local machine<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-10 16:41:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21353.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Previous message:</strong> <a href="21351.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>In reply to:</strong> <a href="21351.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21353.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Reply:</strong> <a href="21353.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What about *inside* OMPI?
<br>
<p>Brice
<br>
<p><p><p>Le 10/02/2013 21:16, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; There is no MPI standard call to get the binding. He could try to use the MPI extensions, depending on which version of OMPI he's using. It is in v1.6 and above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See &quot;man OMPI_Affinity_str&quot; for details (assuming you included the OMPI man pages in your MANPATH), or look at it online at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/doc/v1.6/man3/OMPI_Affinity_str.3.php">http://www.open-mpi.org/doc/v1.6/man3/OMPI_Affinity_str.3.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Remember, you have to configure with --enable-mpi-ext in order to enable the extensions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 10, 2013, at 12:08 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've been talking with Kranthi offline, he wants to use locality info
</span><br>
<span class="quotelev2">&gt;&gt; inside OMPI. He needs the binding info from *inside* MPI. From 10
</span><br>
<span class="quotelev2">&gt;&gt; thousands feet, it looks like communicator-&gt;rank[X]-&gt;locality_info as a
</span><br>
<span class="quotelev2">&gt;&gt; hwloc object or as a hwloc bitmap.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 10/02/2013 06:07, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Add --report-bindings to the mpirun cmd line
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Remember, we do not bind processes by default, so you will need to include something about the binding to use (by core, by socket, etc.) on the cmd line
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See &quot;mpirun -h&quot; for the options
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 9, 2013, at 8:46 PM, Kranthi Kumar &lt;kranthipls_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello Sir,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I need a way to find out where each rank runs from inside the implementation? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How do I  know the binding of each rank in an MPI application? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kranthi _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="21353.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Previous message:</strong> <a href="21351.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>In reply to:</strong> <a href="21351.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21353.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Reply:</strong> <a href="21353.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
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
