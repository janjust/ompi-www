<?
$subject_val = "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 17:09:11 2014" -->
<!-- isoreceived="20140527210911" -->
<!-- sent="Tue, 27 May 2014 14:09:07 -0700" -->
<!-- isosent="20140527210907" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework" -->
<!-- id="D3845033-C16C-40FB-B731-F859207EBF41_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkU6xdBgnHVeiaLLujoAw3w+kEtQu9fFeUNEMs46CXBTGQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 17:09:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14871.php">George Bosilca: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14869.php">George Bosilca: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14869.php">George Bosilca: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14871.php">George Bosilca: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14871.php">George Bosilca: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 27, 2014, at 1:50 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From a practical perspective, I don't think there is a need for a
</span><br>
<span class="quotelev1">&gt; phone call. Ralph made his point, and we all took notice of it.
</span><br>
<span class="quotelev1">&gt; However, the proposed changes are in a single independent component,
</span><br>
<span class="quotelev1">&gt; with no impact on the rest of the code base. Therefore, there is
</span><br>
<span class="quotelev1">&gt; absolutely no valid reason not to be accepted in the trunk (ORNL
</span><br>
<span class="quotelev1">&gt; already signed the contribution agreement). The fact that they are
</span><br>
<span class="quotelev1">&gt; used by a single institution might be a little unsettling, but we do
</span><br>
<span class="quotelev1">&gt; have precedents on this area.
</span><br>
<p>As I said, I am not staunchly opposed - while I don't understand the arguments given, I don't oppose so long as there is an understanding that this doesn't imply any change in our prior agreement re how we handle external RTEs versus ORTE and who is maintaining these components.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, I agree with Ralph on the fact that accepting them in
</span><br>
<span class="quotelev1">&gt; the trunk doesn't automatically qualify it for inclusion in any
</span><br>
<span class="quotelev1">&gt; further stable release. However, if ORNL setup nightly builds to
</span><br>
<span class="quotelev1">&gt; validate their module, I'm pretty certain nothing will stay against
</span><br>
<span class="quotelev1">&gt; their inclusion in some future release.
</span><br>
<p>I strongly disagree - we've discussed this at length before, and the issue of release schedule coordination is a deal buster. If people think it helpful to have their component in the devel trunk, I can somewhat absorb that one. Adding them to a release is a non-starter with me.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: UTK indirectly uses STCI in other contexts. We would definitively
</span><br>
<span class="quotelev1">&gt; appreciate having Open MPI integrate with STCI seamlessly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, May 27, 2014 at 4:18 PM, Thomas Naughton &lt;naughtont_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sure, if its helpful I can join a call.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --tjn
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _________________________________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;  Thomas Naughton                                      naughtont_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  Research Associate                                   (865) 576-4184
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 27 May 2014, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Forgot to add: would it help to discuss this over the phone instead?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 27, 2014, at 12:56 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 27, 2014, at 12:50 PM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 5/27/2014 2:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On May 27, 2014, at 12:27 PM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'll let ORNL talk about the STCI component itself (which might
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; have additional reasons), but keeping the code in trunk vs. an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; outside github/mercurial repository has two advantages in my
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; opinion: i) it simplifies the propagation of know-how between the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; groups,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Afraid I don't understand that - this is just glue, right?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; yes, but its easier to look in one place vs. n places for every
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; features.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and ii) avoids having to keep a separate branch up to date. (We did
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the second part with OMPIO for a couple of years, and that was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; really painful).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ah, perhaps this is the &quot;rub&quot; - are you saying that you expect us to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; propagate any changes in the RTE interface to your component? If so,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; then that violates the original agreement about this framework. It
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; was solely to provide a point-of-interface for *external* groups to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; connect their RTE's into OMPI. We agreed that we would notify people
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of changes to that interface, and give them a chance to provide input
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on those changes - but under no conditions were we wiling to accept
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; responsibility for maintaining those branch interfaces.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Given that the interface is wholly contained in the ompi/rte
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component, I guess I struggle to understand the code conflict issue.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There is no change in the OMPI code base that can possibly conflict
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with your component. The only things that could impact you are
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; changes in the OMPI layer that require modification to your
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component, which is something you'd have to do regardless. We will
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; not test nor update that component for you.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no, not all. My point was that we invested enormous efforts at that time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to just do the svn merge from the changes on trunk to our branch, that's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you are on a branch that contains an svn checkout of the trunk, plus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one component directory in one framework, then I'm afraid I cannot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; understand how you get merge conflicts. I've been doing this for years and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; haven't hit one yet. The only possible source of a conflict is if I touch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code that is common to the two repos - i.e., outside of the area that I'm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; adding. In this case, that should never happen, yes?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If it does, then you touched code outside your component, and you either
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (a) are going to encounter this no matter what because you haven't pushed it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; up yet, or (b) couldn't commit that up to the main repo anyway if it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; impacted the RTE interface.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry, but I'm really struggling to understand how adding only this one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component, which you solely modify and control, can possibly help with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; maintaining your branch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; In addition, IANAL, but I was actually wandering about the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; implications of using separate code repositories outside of ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; for sharing code, and whether that is truly still covered by the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; contributors agreement that we all signed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Of course not - OMPI's license only declares that anything you push
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; into the main OMPI code repo (and hence, our official releases) is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; covered by that agreement. Anything you add or distribute externally
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is on your own. You can *choose* to license that code in accordance
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with the OMPI license, but you aren't *required* to do so.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anyway, I don't have strong feelings either way as well, just would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; see a couple of advantages (for us) if the code was in the trunk.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm still trying to understand those - sorry to be a pain, but my
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; biggest fear at this point is that the perceived advantage is based
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on a misunderstanding, and I'd like to head that off before it causes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problems.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 5/27/2014 1:45 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I think so long as we leave these components out of any release,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; there is a limited potential for problems (probably most
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; importantly, we sidestep all the issues about syncing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; releases!).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, that said, I'm not sure what it gains anyone to include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a component that *isn't* going in a release. Nobody outside your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; organizations is going to build against it - so what did it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; accomplish to push the code into the repo?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mind you, I'm not saying I'm staunchly opposed - just trying to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; understand how it benefits anyone.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 27, 2014, at 11:28 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To through in my $0.02, I would see a benefit in adding the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component to the trunk. As I mentioned in the last teleconf, we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; are currently working on adding support for the HPX runtime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment to Open MPI, and for various reasons (that I can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; explain if somebody is interested), we think at the moment that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using the RTE abstraction layer could be easier for achieving
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; what we want to do. That is not at all a judgment on ORTE, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a combination of what HPX offers and what we want to achieve
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; within that project.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I do not foresee at this point that our component would be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; production quality or part of an upcoming OMPI release, having
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; however another component in the rte framework  could be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; useful from our point of view. (And yes, the person that asked
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the pmi/rte question on the mailing list was my student who
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tried to make the pmi component work, and was confused about
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the fact that other emails said that the pmi stuff is working,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; while he couldn't even get it to compile :)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 5/27/2014 12:23 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have mixed thoughts on this request. We have a policy of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; only including things in the code base that are of general
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; utility - i.e., that should be generally distributed across
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the community. This component is only applicable to ORNL, and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it would therefore seem more sensible to have it continue to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; be maintained there.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm unaware of anyone outside of ORNL that regularly tests
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for ompi-rte abstraction violations, and I suspect that your
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; internal tests are the right place for catching them as
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nobody else really seems to care. It isn't clear to me how
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; adding this component directly to the general code base
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; impacts that operation. The original PMI component in the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi/rte framework wasn't intended to provide an alternative
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; method for building OMPI - it was solely created to support
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the development of that framework and had no intended utility
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; beyond that time (hence the RFC to remove it to avoid user
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; confusion as we just saw on the user mailing list).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 27, 2014, at 9:25 AM, Thomas Naughton
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;naughtont_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; WHAT:  add new component to ompi/rte framework
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; WHY:   because it will simplify our maintenance &amp; provide
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; an alt. reference
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; WHEN:  no rush, soon-ish? (June 12?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is a component we currently maintain outside of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi tree to support using OMPI with an alternate runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; system. This will also provide an alternate component to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE, which was motivation for PMI component in related
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; RFC.   We build/test nightly and it occasionally catches
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi-rte abstraction violations, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thomas
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _________________________________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thomas Naughton                                      naughtont_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Research Associate                                   (865)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 576-4184
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mailing list devel_at_[hidden] Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14852.php">http://www.open-mpi.org/community/lists/devel/2014/05/14852.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14854.php">http://www.open-mpi.org/community/lists/devel/2014/05/14854.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Edgar Gabriel Associate Professor Parallel Software Technologies
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a> Department of Computer Science
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; University of Houston Philip G. Hoffman Hall, Room 524 Houston,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; TX-77204, USA Tel: +1 (713) 743-3857                  Fax: +1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (713) 743-3335
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel mailing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; list devel_at_[hidden] Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14856.php">http://www.open-mpi.org/community/lists/devel/2014/05/14856.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14857.php">http://www.open-mpi.org/community/lists/devel/2014/05/14857.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Edgar Gabriel Associate Professor Parallel Software Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a> Department of Computer Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; University of Houston Philip G. Hoffman Hall, Room 524
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Houston, TX-77204, USA Tel: +1 (713) 743-3857                  Fax:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; +1 (713) 743-3335
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14858.php">http://www.open-mpi.org/community/lists/devel/2014/05/14858.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14859.php">http://www.open-mpi.org/community/lists/devel/2014/05/14859.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14860.php">http://www.open-mpi.org/community/lists/devel/2014/05/14860.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14866.php">http://www.open-mpi.org/community/lists/devel/2014/05/14866.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14869.php">http://www.open-mpi.org/community/lists/devel/2014/05/14869.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14871.php">George Bosilca: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14869.php">George Bosilca: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14869.php">George Bosilca: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14871.php">George Bosilca: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14871.php">George Bosilca: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
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
