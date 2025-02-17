<?
$subject_val = "Re: [OMPI devel] RFC: Move of ompi_bitmap_t";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 18:10:14 2009" -->
<!-- isoreceived="20090130231014" -->
<!-- sent="Fri, 30 Jan 2009 18:10:09 -0500" -->
<!-- isosent="20090130231009" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Move of ompi_bitmap_t" -->
<!-- id="C5A8F301.2DE3D%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="482FC9F9-278A-4834-BE9B-C7BF62170F3A_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Move of ompi_bitmap_t<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 18:10:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5347.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5345.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5345.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5347.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks - very helpful.
<br>
<p>Rich
<br>
<p><p>On 1/30/09 4:59 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The history is simple. Originally, there was one bitmap_t in orte that
</span><br>
<span class="quotelev1">&gt; was also used in ompi. Then the folks working on Fortran found that
</span><br>
<span class="quotelev1">&gt; they had to put a limit in the bitmap code to avoid getting values
</span><br>
<span class="quotelev1">&gt; outside of Fortran's range. However, this introduced a problem - if we
</span><br>
<span class="quotelev1">&gt; had the limit in the orte version, then we limited ourselves
</span><br>
<span class="quotelev1">&gt; unnecessarily, and introduced some abstraction questions since orte
</span><br>
<span class="quotelev1">&gt; knows nothing about Fortran.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So two were created. Then the orte_bitmap_t was blown away at a later
</span><br>
<span class="quotelev1">&gt; time when we removed the GPR as George felt it wasn't necessary (which
</span><br>
<span class="quotelev1">&gt; was true). It was later reborn when we needed it in the routed system,
</span><br>
<span class="quotelev1">&gt; but this time it was done in opal as others indicated a potential more
</span><br>
<span class="quotelev1">&gt; general use for that capability.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem with uniting the two is that you either have to introduce
</span><br>
<span class="quotelev1">&gt; Fortran-based limits into opal (which messes up the non-ompi uses), or
</span><br>
<span class="quotelev1">&gt; deal with the Fortran limits in some other fashion. Neither is
</span><br>
<span class="quotelev1">&gt; particularly pleasant, though it could be done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think it primarily is a question for the Fortran folks to address -
</span><br>
<span class="quotelev1">&gt; can they deal with Fortran limits in some other manner without making
</span><br>
<span class="quotelev1">&gt; the code unmanageable and/or taking a performance hit?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 30, 2009, at 2:40 PM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This should really be viewed as a code maintenance RFC.  The reason
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; came up in the first place is because we are investigating the btl
</span><br>
<span class="quotelev2">&gt;&gt; move, but
</span><br>
<span class="quotelev2">&gt;&gt; these are really two very distinct issues.  There are two bits of
</span><br>
<span class="quotelev2">&gt;&gt; code that
</span><br>
<span class="quotelev2">&gt;&gt; have virtually the same functionality - they do have the same
</span><br>
<span class="quotelev2">&gt;&gt; interface I am
</span><br>
<span class="quotelev2">&gt;&gt; told.  The question is, is there a good reason to keep two different
</span><br>
<span class="quotelev2">&gt;&gt; versions in the repository ?  Not knowing the history of why a second
</span><br>
<span class="quotelev2">&gt;&gt; version was created this is an inquiry.  Is there some performance
</span><br>
<span class="quotelev2">&gt;&gt; advantage, or some other advantage to having these two versions ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 1/30/09 3:23 PM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I second Brian's concern.  So unless this is just an announcement
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is being done on a tmp branch only until everything is in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; order I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think we need further discussions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So once again, I bring up my objection of this entire line of moving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; until such time as the entire process is properly mapped out.  I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; believe it's premature to being moving around code in preparation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a move that hasn't been proven viable yet.  Until there is concrete
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; evidence that such a move is possible, won't degrade application
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; performance, and does not make the code totally unmaintainable, I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; believe that any related code changes should not be brought into the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 30, 2009, at 12:30 PM, Rainer Keller wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On behalf of Laurent Broto
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; RFC: Move of ompi_bitmap_t
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHAT: Move ompi_bitmap_t into opal or onet-layer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHY: Remove dependency on ompi-layer.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHERE: ompi/class
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHEN: Open MPI-1.4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TIMEOUT: February 3, 2009.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Details:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHY:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The ompi_bitmap_t is being used in various places within
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal/orte/ompi. With
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the proposed splitting of BTLs into a separate library, we are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; currently
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; investigating several of the differences between ompi/class/* and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal/class/*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; One of the items is the ompi_bitmap_t which is quite similar to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_bitmap_t.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The question is, whether we can remove favoring a solution just
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in opal.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHAT:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The data structures in the opal-version are the same,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; so is the interface,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the implementation is *almost* the same....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The difference is the Fortran handles ;-]!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maybe we're missing something but could we have a discussion, on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; why
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fortran
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sizes are playing a role here, and if this is a hard requirement,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; how
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we could
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; settle that into that current interface (possibly without a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; notion of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fortran,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but rather, set some upper limit that the bitmap may grow to?)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With best regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Laurent and Rainer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rainer Keller, PhD                  Tel: (865) 241-6293
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Oak Ridge National Lab          Fax: (865) 241-4811
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5347.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5345.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5345.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5347.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
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
