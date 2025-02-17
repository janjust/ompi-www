<?
$subject_val = "Re: [OMPI devel] PLPA ready?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 19 11:53:45 2008" -->
<!-- isoreceived="20080219165345" -->
<!-- sent="Tue, 19 Feb 2008 11:53:18 -0500" -->
<!-- isosent="20080219165318" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLPA ready?" -->
<!-- id="E3B0AD80-712A-4AE1-A065-ED780625D09A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47BB082A.3000608_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PLPA ready?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-19 11:53:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3265.php">Pak Lui: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3263.php">Terry Dontje: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3263.php">Terry Dontje: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3265.php">Pak Lui: "Re: [OMPI devel] PLPA ready?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Will do.  I stress that it *might* be worthwhile -- I think it at  
<br>
least partially depends on what Voltaire does and whether they think  
<br>
it should change (since they're the first ones using the paffinity API  
<br>
in a meaningful way).
<br>
<p>If we want to change it, it would probably be good to do so before 1.3  
<br>
so that the interface can be [at least pseudo-]stable for the 1.3.x  
<br>
series.
<br>
<p>Just my $0.02...
<br>
<p><p><p>On Feb 19, 2008, at 11:47 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; $%@#$%  Sorry.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I saw that and fixed it in my local OMPI SVN copy last night as well.
</span><br>
<span class="quotelev2">&gt;&gt; Here's a patch to make it go (I obviously didn't want to commit this
</span><br>
<span class="quotelev2">&gt;&gt; until the new PLPA goes in).  We *may* want to revise the paffinity
</span><br>
<span class="quotelev2">&gt;&gt; API to match PLPA, not because Linux is the one-and-only-way, but
</span><br>
<span class="quotelev2">&gt;&gt; because we actually took some effort in PLPA to make a fairly neutral
</span><br>
<span class="quotelev2">&gt;&gt; API.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Jeff can you work with Pak to make sure this doesn't completely mess  
</span><br>
<span class="quotelev1">&gt; up
</span><br>
<span class="quotelev1">&gt; Solaris' processor affinity methods in OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 19, 2008, at 8:59 AM, Sharon Melamed wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The new PLPA fails in compilation. there is a need to change the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; paffinity API's:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. max_processor_id with one parameter --&gt; get_processor_info with 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameters.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. max_socket with one parameter --&gt; get_socket_info with 2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameters.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. max_core with 2 parameters --&gt; get_core_info with 3 parameters.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I changed these API's internally in my copy of the trunk and tested
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the new PLPA.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it works properly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have an idea how to integrate the new PLPA with the new  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; API's ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sharon.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 19, 2008 4:31 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sharon/Lenny --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you try out the newest PLPA RC for me?  I think it's  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ready.  I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just posted rc4 to the web site (I posted that rc3 was available,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then found a small bug that necessitated rc4):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/plpa/v1.1/">http://www.open-mpi.org/software/plpa/v1.1/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You should be able to do this to test it within an OMPI SVN  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checkout:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cd opal/mca/paffinity/linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mv plpa bogus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tar zxf plpa-1.1rc4.tar.gz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s plpa-1.1rc4 plpa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cd ../../../..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./autogen &amp;&amp; ./configure ...... &amp;&amp; make -j 4 ......
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Let me know if it works for you properly (configure, build, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function).  If so, I think it's ready for release.  I'll then do  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SVN magic to bring it to the OMPI trunk.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3265.php">Pak Lui: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3263.php">Terry Dontje: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3263.php">Terry Dontje: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3265.php">Pak Lui: "Re: [OMPI devel] PLPA ready?"</a>
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
