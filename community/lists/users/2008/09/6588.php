<?
$subject_val = "Re: [OMPI users] errors returned from openmpi-1.2.7 source code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 14:16:45 2008" -->
<!-- isoreceived="20080917181645" -->
<!-- sent="Wed, 17 Sep 2008 11:16:41 -0700 (PDT)" -->
<!-- isosent="20080917181641" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errors returned from openmpi-1.2.7 source code" -->
<!-- id="395287.79222.qm_at_web34807.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="833115B5-8C7F-4A96-B6A2-695215F153A4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] errors returned from openmpi-1.2.7 source code<br>
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 14:16:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Previous message:</strong> <a href="6587.php">Jeff Squyres: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>In reply to:</strong> <a href="6585.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Reply:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The openmpi is installed in the following path: /opt/openmpi/1.2.7 so should i replce what you told me about /usr/lib with /opt/openmpi/1.2.7 ??
<br>
<p>--- On Wed, 9/17/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] errors returned from openmpi-1.2.7 source code
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Wednesday, September 17, 2008, 9:22 AM
<br>
<p>I don't quite understand the format of this file, but at first glance,  
<br>
you shouldn't need the following lines:
<br>
<p>export LIBMPI = -lmpi
<br>
<p>export MPIDIR=/nfs/sjafer/phd/openMPI/installed
<br>
export LDFLAGS +=-L$(MPIDIR)/lib
<br>
export INCLUDES_CPP += -I$(MPIDIR)/include
<br>
<p>It also doesn't seem like the last 2 arguments of this line are a good  
<br>
idea (the linker should automatically put /usr/lib and /lib in your  
<br>
search path, if appropriate):
<br>
<p>export LDFLAGS+=-L. -L$/usr/lib -L$/lib
<br>
<p>I also notice:
<br>
<p>export CPP=mpic++
<br>
export CC=mpiCC
<br>
<p>I think you want &quot;mpicc&quot; for CC (note the lower case) -- mpiCC is the
<br>
C 
<br>
++ compiler (mpic++ and mpiCC are synonyms).
<br>
<p>This might solve your problem.
<br>
<p><p><p>On Sep 15, 2008, at 4:56 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; i am sending you my simulator's Makefile.common which points to  
</span><br>
<span class="quotelev1">&gt; openmpi, please take a look at it. Thanks a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Mon, 9/15/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] errors returned from openmpi-1.2.7 source  
</span><br>
<span class="quotelev1">&gt; code
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Monday, September 15, 2008, 11:21 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 14, 2008, at 1:24 PM, Shafagh Jafer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I installed openmpi-1.2.7 and tested the hello_c and ring_c examples
</span><br>
<span class="quotelev2">&gt; &gt; on single and multiple node and worked fine. However, when I use
</span><br>
<span class="quotelev2">&gt; &gt; openmpi with my simulator (by replacing the old mpich path with the
</span><br>
<span class="quotelev2">&gt; &gt; new openmpi ) I get many errors reported from &quot;/openMPI/
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/*.h&quot; . Please see the
</span><br>
<span class="quotelev2">&gt; &gt; following snap shots:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not clear exactly what you did here.  Did you just replace
</span><br>
<span class="quotelev1">&gt; MPICH's &quot;mpiCC&quot; with OMPI's &quot;mpiCC&quot;?  FWIW,
</span><br>
this is
<br>
<span class="quotelev1">&gt; almost always the
</span><br>
<span class="quotelev1">&gt; easiest way to compile MPI applications: use that implementation's
</span><br>
<span class="quotelev1">&gt; &quot;wrapper&quot; compiler (I'm assuming you have a C++ code in this
</span><br>
<span class="quotelev1">&gt; case).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These errors should not normally happen; they look kinda like you're
</span><br>
<span class="quotelev1">&gt; somehow inadvertently mixing Open MPI and MPICH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt; &lt;Makefile.common&gt;_______________________________________________
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
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
      
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6588/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Previous message:</strong> <a href="6587.php">Jeff Squyres: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>In reply to:</strong> <a href="6585.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Reply:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
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
