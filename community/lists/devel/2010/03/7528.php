<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 16:00:34 2010" -->
<!-- isoreceived="20100303210034" -->
<!-- sent="Wed, 03 Mar 2010 15:59:33 -0500" -->
<!-- isosent="20100303205933" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762" -->
<!-- id="4B8ECDB5.7040007_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C54549E1-1016-4AFF-8DB4-E1706FEA294C_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 15:59:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7529.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Previous message:</strong> <a href="7527.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>In reply to:</strong> <a href="7525.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7529.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Reply:</strong> <a href="7529.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Iain Bason wrote:
<br>
<span class="quotelev1">&gt; On Mar 3, 2010, at 3:04 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Mmmm... good point.  I was thinking specifically of the if_in|exclude behavior in the openib BTL.  That uses strcmp, not strncmp.  Here's a complete list:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --param all all --parsable | grep include | grep :value:
</span><br>
<span class="quotelev2">&gt;&gt; mca:opal:base:param:opal_event_include:value:pollmca:btl:ofud:param:btl_ofud_if_include:value:
</span><br>
<span class="quotelev2">&gt;&gt; mca:btl:openib:param:btl_openib_if_include:value:
</span><br>
<span class="quotelev2">&gt;&gt; mca:btl:openib:param:btl_openib_ipaddr_include:value:mca:btl:openib:param:btl_openib_cpc_include:value:
</span><br>
<span class="quotelev2">&gt;&gt; mca:btl:sctp:param:btl_sctp_if_include:value:
</span><br>
<span class="quotelev2">&gt;&gt; mca:btl:tcp:param:btl_tcp_if_include:value:
</span><br>
<span class="quotelev2">&gt;&gt; mca:btl:base:param:btl_base_include:value:
</span><br>
<span class="quotelev2">&gt;&gt; mca:oob:tcp:param:oob_tcp_if_include:value:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do we know what these others do?  I only checked openib_if_*clude -- it's strcmp.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't looked at those, but it's easy to grep for strncmp...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks as though sctp is the only other BTL that uses strncmp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, if we decide to change the default so that it no longer includes &quot;lo&quot; then maybe using strncmp doesn't matter.  The problem has been that the name of the interface is different on different platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I should note that the default also excludes &quot;sppp&quot;.  I don't know anything about that interface.)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I may be wrong for the usage here but the old Sun Starcats had a tcp 
<br>
interface named sppp to its diagnostic processor that we needed to skip.
<br>
Not sure if this is the same reason done here, I couldn't find where 
<br>
sppp was referenced so I could find the history of the line in opengrok.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Additionally, if loopback is now handled properly via change #2, shouldn't the default value for the btl_tcp_if_exclude parameter now be empty?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's a good question.  Enabling the &quot;lo&quot; interface results in intra-node messages being striped across that interface in addition to the others on a system.  I don't know what impact that would have, if any.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; sm and self should still be prioritized above it, right?  If so, we should be ok.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that's true.  It would only affect those who restrict intra-node communication to TCP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; However, I think you're right that the addition of striping across lo* in addition to the other interfaces might have an unknown effect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's a random question -- if a user does not use the sm btl, would sending messages through lo for on-node communication be potentially better than sending it through a real device, given that that real device may be far away (in the NUMA sense of &quot;far&quot;)?  I.e., are OS's typically smart enough to know that loopback traffic may be able to stay local to the NUMA node, vs. sending it out to a device and back?  Or are OS's smart enough to know that if the both ends of a TCP socket are on the same node -- regardless of what IP interface they use -- and if both processes are on the same NUMA locality, that the data can stay local and not have to make a round trip to the device?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (I admit that this is a fairly corner case -- doing on-node communication but *not* using the sm btl...)
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good question.  For the loopback interface there is no physical device, so there should be no NUMA effect.  For an interface with a physical device there may be some reason that a packet would actually have to go out to the device.  If there is no such reason, I would expect Unix to be smart enough not to do it, given how much intra-node TCP traffic one commonly sees on Unix.  I couldn't hazard a guess about Windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iain
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
<li><strong>Next message:</strong> <a href="7529.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Previous message:</strong> <a href="7527.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>In reply to:</strong> <a href="7525.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7529.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Reply:</strong> <a href="7529.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
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
