<?
$subject_val = "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 10:59:46 2014" -->
<!-- isoreceived="20140414145946" -->
<!-- sent="Mon, 14 Apr 2014 17:59:44 +0300" -->
<!-- isosent="20140414145944" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions" -->
<!-- id="CAAO1KyZzxnfWqSpTQxj9nRk7VMpQUQzY+8UCHmf4a7TvBTrCNA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BE9BFE65-F39D-426F-A2E6-9BE901291289_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 10:59:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14511.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14509.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14509.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14511.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14511.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14513.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no correlation between built_with and running_with versions of
<br>
external libraries supported by OMPI.
<br>
<p>The next release of external library does not mean we should remove code in
<br>
ompi for all previous supported releases for the same library.
<br>
<p>vendor/site can certify slurm version 2.6.1 while latest is 2.6.6.
<br>
SLURM is not ABI compliant between releases, so site would like to know
<br>
what is active version vs. certified to issue an early warning.
<br>
<p>Why are you so against it? I don`t see any issue with printing ext lib
<br>
version number in the MCA description, something that can improve
<br>
sysadmin/user-experience.
<br>
<p><p><p><p>On Mon, Apr 14, 2014 at 5:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2014, at 7:34 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it is unrelated:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The OMPI can support and built with many different (or all) versions of
</span><br>
<span class="quotelev1">&gt; external library (for example: libmxm or libslurm).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not true - we do indeed check the library version in all cases where it
</span><br>
<span class="quotelev1">&gt; matters. For example, the case you cite as your true story could easily
</span><br>
<span class="quotelev1">&gt; have been prevented by using OMPI_CHECK_PACKAGE to verify that the libmxm
</span><br>
<span class="quotelev1">&gt; had the required function in it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. The OMPI utility ompi_info can expose the currently available version
</span><br>
<span class="quotelev1">&gt; of libmxm/libslurm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes - but what good does that do? Bottom line is that you shouldn't have
</span><br>
<span class="quotelev1">&gt; built if that library version isn't supported
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. The vendor or end-user wants to certify specific version of libmxm or
</span><br>
<span class="quotelev1">&gt; libslurm to be used in the customer environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. The current way - put a note into libmxm/libslurm Relase Notes, which
</span><br>
<span class="quotelev1">&gt; is not a guarantee that site user/sysadmin will pay attention in production
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, that's the whole purpose of the configure logic. You are supposed
</span><br>
<span class="quotelev1">&gt; to check the library to ensure it is compatible, not just blindly build and
</span><br>
<span class="quotelev1">&gt; then make the user figure it out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. The suggestion is to use #2 to write script by user or vendor which
</span><br>
<span class="quotelev1">&gt; will match currently available versions with supported/certified and let
</span><br>
<span class="quotelev1">&gt; admin/user know that there is a mismatch between running and supported
</span><br>
<span class="quotelev1">&gt; version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Like I said, that's the developer's responsibility to get the configure
</span><br>
<span class="quotelev1">&gt; logic correct - not the user's responsibility to figure it out
</span><br>
<span class="quotelev1">&gt; after-the-fact.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. based on the true story :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 14, 2014 at 5:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;let's be consistent and shift this to the devel list&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm still confused - how is that helpful? How was the build allowed to
</span><br>
<span class="quotelev2">&gt;&gt; complete if the external library version isn't supported?? You should
</span><br>
<span class="quotelev2">&gt;&gt; either quietly not-build the affected component, or error out if the user
</span><br>
<span class="quotelev2">&gt;&gt; specifically requested that component be built.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This sounds to me like you have a weakness in your configure logic, and
</span><br>
<span class="quotelev2">&gt;&gt; are trying to find a bandaid. Perhaps a better solution (that wouldn't
</span><br>
<span class="quotelev2">&gt;&gt; cause us to change every component in the code base) would be to just add
</span><br>
<span class="quotelev2">&gt;&gt; appropriate tests to your configure logic so you don't incorrectly build
</span><br>
<span class="quotelev2">&gt;&gt; against an unsupported library?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 14, 2014, at 7:12 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The use-case I`m interested to expose through ompi_info/oshmem_info the
</span><br>
<span class="quotelev2">&gt;&gt; compiled-in versions of external libraries.
</span><br>
<span class="quotelev2">&gt;&gt; User/Vendor can write small script on top of ompi_info/oshmem_info to
</span><br>
<span class="quotelev2">&gt;&gt; check if running version are in par with supported matrix.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 14, 2014 at 5:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Guess I'm a little confused and trying to understand the issue, so let's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consider a couple of cases:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * If we are building against an unsupported version of an external
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library, that is supposed to be detected by the configure logic, yes?  So
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you would output a nice error message at that time, and stop the build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * If we were built against one version of an external library, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; someone attempts to run us against a different version, you'd have to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; detect that somehow at runtime. I'm not sure how you could reliably do that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as the problem is likely to manifest itself as an unresolved function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (i.e., we use something that doesn't exist in the version being used) or a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; difference in a function signature. Either way, you'll either fail to load
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the library or crash.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I'm not sure what the added function pointer actually accomplishes. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suppose you could use it during ompi_info to display something about what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version you linked against, but that won't help solve either of the above
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you help explain a little further?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 14, 2014, at 5:57 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +devel mailing list (for web mail archive)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Apr 12, 2014 at 9:04 PM, Mike Dubman &lt;miked_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you please suggest if following is addressed in MCA architecture
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or maybe it is something we should add:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Current MCA API:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The new MCA component should provide descriptor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_base_component_2_0_0_t which specifies how to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; init/open/close/query/enable every new component.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, the descriptor is used to specify version of MCA framework and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version of MCA component.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What is missing:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Some MCA components are wrappers on top of external libraries, i.e.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc (libhwloc.so)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; usnic (libusnic.so)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fca (libfca.so)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mxm (libmxm.so)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slurm (libslurn.so)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pbs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pmi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openib (libibverbs)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; vader (knem, ...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, it would be very useful if MCA descriptor will have another
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function pointer which return the version of external dependent library (if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; applicable).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The ompi_info and oshmem_info will print it if present and will allow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sysadmin to track vendor specific dependencies for OMPI (like: mxm compiled
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with libmxm 2.1, usnic with libusnic v1.0, ...) and warn users if compiled
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; versions do not match vendor recommended.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please suggest.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14507.php">http://www.open-mpi.org/community/lists/devel/2014/04/14507.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14508.php">http://www.open-mpi.org/community/lists/devel/2014/04/14508.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14509.php">http://www.open-mpi.org/community/lists/devel/2014/04/14509.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14510/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14511.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14509.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14509.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14511.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14511.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14513.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
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
