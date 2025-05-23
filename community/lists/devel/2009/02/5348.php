<?
$subject_val = "Re: [OMPI devel] RFC: Move of ompi_bitmap_t";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 10:36:39 2009" -->
<!-- isoreceived="20090201153639" -->
<!-- sent="Sun, 1 Feb 2009 08:36:33 -0700" -->
<!-- isosent="20090201153633" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Move of ompi_bitmap_t" -->
<!-- id="DF997E27-5DBE-43D4-BA5C-5698A48084A6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2F2A02EF-FDE7-42DD-ACCE-686F076EA8C8_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-01 10:36:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5349.php">Broto, Laurent G.: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5347.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5347.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5349.php">Broto, Laurent G.: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In that case, I remove my objection to this particular RFC.  It  
<br>
remains for all other RFCs related to moving any of the BTL move code  
<br>
to the trunk before the critical issues with the BTL move have been  
<br>
sorted out in a temporary branch.  This includes renaming functions  
<br>
and such.  Perhaps we should have a discussion about those issues  
<br>
during the Forum in a couple weeks?
<br>
<p>Brian
<br>
<p>On Feb 1, 2009, at 5:37 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I just looked through both opal_bitmap_t and ompi_bitmap_t and I  
</span><br>
<span class="quotelev1">&gt; think that the only real difference is that in the ompi version, we  
</span><br>
<span class="quotelev1">&gt; check (in various places) that the size of the bitmap never grows  
</span><br>
<span class="quotelev1">&gt; beyond OMPI_FORTRAN_HANDLE_MAX; the opal version doesn't do these  
</span><br>
<span class="quotelev1">&gt; kind of size checks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it would be fairly straightforward to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - add generic checks into the opal version, perhaps by adding a new  
</span><br>
<span class="quotelev1">&gt; API call (opal_bitmap_set_max_size())
</span><br>
<span class="quotelev1">&gt; - if the max size has been set, then ensure that the bitmap never  
</span><br>
<span class="quotelev1">&gt; grows beyond that size, otherwise let it have the same behavior as  
</span><br>
<span class="quotelev1">&gt; today (grow without bound -- assumedly until malloc() fails)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It'll take a little care to ensure to merge the functionality  
</span><br>
<span class="quotelev1">&gt; correctly, but it is possible.  Once that is done, you can:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - remove the ompi_bitmap_t class
</span><br>
<span class="quotelev1">&gt; - s/ompi_bitmap/opal_bitmap/g in the OMPI layer
</span><br>
<span class="quotelev1">&gt; - add new calls to opal_bitmap_set_max_size(&amp;bitmap,  
</span><br>
<span class="quotelev1">&gt; OMPI_FORTRAN_HANDLE_MAX) in the OMPI layer (should only be in a few  
</span><br>
<span class="quotelev1">&gt; places -- probably one for each MPI handle type...?  It's been so  
</span><br>
<span class="quotelev1">&gt; long since I've looked at that code that I don't remember offhand)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd generally be in favor of this because, although this is not a  
</span><br>
<span class="quotelev1">&gt; lot of repeated code, it *is* repeated code -- so cleaning it up and  
</span><br>
<span class="quotelev1">&gt; consolidating the non-Fortran stuff down in opal is not a Bad Thing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 30, 2009, at 4:59 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The history is simple. Originally, there was one bitmap_t in orte  
</span><br>
<span class="quotelev2">&gt;&gt; that was also used in ompi. Then the folks working on Fortran found  
</span><br>
<span class="quotelev2">&gt;&gt; that they had to put a limit in the bitmap code to avoid getting  
</span><br>
<span class="quotelev2">&gt;&gt; values outside of Fortran's range. However, this introduced a  
</span><br>
<span class="quotelev2">&gt;&gt; problem - if we had the limit in the orte version, then we limited  
</span><br>
<span class="quotelev2">&gt;&gt; ourselves unnecessarily, and introduced some abstraction questions  
</span><br>
<span class="quotelev2">&gt;&gt; since orte knows nothing about Fortran.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So two were created. Then the orte_bitmap_t was blown away at a  
</span><br>
<span class="quotelev2">&gt;&gt; later time when we removed the GPR as George felt it wasn't  
</span><br>
<span class="quotelev2">&gt;&gt; necessary (which was true). It was later reborn when we needed it  
</span><br>
<span class="quotelev2">&gt;&gt; in the routed system, but this time it was done in opal as others  
</span><br>
<span class="quotelev2">&gt;&gt; indicated a potential more general use for that capability.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem with uniting the two is that you either have to  
</span><br>
<span class="quotelev2">&gt;&gt; introduce Fortran-based limits into opal (which messes up the non- 
</span><br>
<span class="quotelev2">&gt;&gt; ompi uses), or deal with the Fortran limits in some other fashion.  
</span><br>
<span class="quotelev2">&gt;&gt; Neither is particularly pleasant, though it could be done.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think it primarily is a question for the Fortran folks to address  
</span><br>
<span class="quotelev2">&gt;&gt; - can they deal with Fortran limits in some other manner without  
</span><br>
<span class="quotelev2">&gt;&gt; making the code unmanageable and/or taking a performance hit?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 30, 2009, at 2:40 PM, Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This should really be viewed as a code maintenance RFC.  The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reason this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; came up in the first place is because we are investigating the btl  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; move, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these are really two very distinct issues.  There are two bits of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have virtually the same functionality - they do have the same  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; told.  The question is, is there a good reason to keep two different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions in the repository ?  Not knowing the history of why a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; second
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version was created this is an inquiry.  Is there some performance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; advantage, or some other advantage to having these two versions ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 1/30/09 3:23 PM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I second Brian's concern.  So unless this is just an announcement  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this is being done on a tmp branch only until everything is in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; order I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; think we need further discussions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So once again, I bring up my objection of this entire line of  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; moving
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; until such time as the entire process is properly mapped out.  I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; believe it's premature to being moving around code in  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; preparation for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a move that hasn't been proven viable yet.  Until there is  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; concrete
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; evidence that such a move is possible, won't degrade application
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; performance, and does not make the code totally unmaintainable, I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; believe that any related code changes should not be brought into  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 30, 2009, at 12:30 PM, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On behalf of Laurent Broto
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; RFC: Move of ompi_bitmap_t
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; WHAT: Move ompi_bitmap_t into opal or onet-layer
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; WHY: Remove dependency on ompi-layer.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; WHERE: ompi/class
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; WHEN: Open MPI-1.4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; TIMEOUT: February 3, 2009.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Details:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; WHY:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The ompi_bitmap_t is being used in various places within
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal/orte/ompi. With
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the proposed splitting of BTLs into a separate library, we are  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; currently
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; investigating several of the differences between ompi/class/* and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal/class/*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; One of the items is the ompi_bitmap_t which is quite similar to  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_bitmap_t.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The question is, whether we can remove favoring a solution just  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in opal.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; WHAT:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The data structures in the opal-version are the same,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; so is the interface,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the implementation is *almost* the same....
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The difference is the Fortran handles ;-]!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Maybe we're missing something but could we have a discussion,  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on why
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Fortran
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sizes are playing a role here, and if this is a hard  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; requirement, how
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; we could
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; settle that into that current interface (possibly without a  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; notion of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Fortran,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; but rather, set some upper limit that the bitmap may grow to?)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; With best regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Laurent and Rainer
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Rainer Keller, PhD                  Tel: (865) 241-6293
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Oak Ridge National Lab          Fax: (865) 241-4811
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5349.php">Broto, Laurent G.: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5347.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5347.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5349.php">Broto, Laurent G.: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
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
