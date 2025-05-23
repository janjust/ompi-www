<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 17 16:49:07 2013" -->
<!-- isoreceived="20131217214907" -->
<!-- sent="Tue, 17 Dec 2013 21:48:55 +0000" -->
<!-- isosent="20131217214855" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?" -->
<!-- id="CED61482.16180%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A3EBEE6A2_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-17 16:48:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13458.php">Jeff Squyres (jsquyres): "[OMPI devel] Default mapping / binding"</a>
<li><strong>Previous message:</strong> <a href="13456.php">Jeff Squyres (jsquyres): "[OMPI devel] Results of OMPI developer's meeting last week"</a>
<li><strong>In reply to:</strong> <a href="13455.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13559.php">Igor Ivanov: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13559.php">Igor Ivanov: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The proposed solution at the bottom is wrong.  There aren't two different
<br>
BMLs, there's one, and it lives in OMPI.
<br>
<p>The solution is to open the bml and btls in ompi_mpi_init and not in the
<br>
pmls.  I checked, and the bml will deal with add_procs being called
<br>
multiple times on the same proc, so just moving the framework open / init
<br>
is sufficient.  This will also solve the MTL problem.
<br>
<p>Brian
<br>
<p>On 12/17/13 8:33 AM, &quot;Joshua Ladd&quot; &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I believe Devendar Bureddy nailed the root cause. I am providing his
</span><br>
<span class="quotelev1">&gt;excellent analysis below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;From Devendar:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;with curiosity i looked at this issue. here's my 2 cents
</span><br>
<span class="quotelev1">&gt;I think issue is because of BTL components is opened&amp;closed
</span><br>
<span class="quotelev1">&gt;twice(ompi_init, yoda) which leading to incorrect usage of var groups.
</span><br>
<span class="quotelev1">&gt;The following sequence of events creating invalid memory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1) all openib component parameters registered in ompi_mpi_init
</span><br>
<span class="quotelev1">&gt;main &gt; start_pes&gt; shmem_init -&gt; oshmem_shmem_init -&gt; ompi_mpi_init -&gt;
</span><br>
<span class="quotelev1">&gt;mca_base_framework_open -&gt; mca_pml_base_open ..... mca_bml_base_open...
</span><br>
<span class="quotelev1">&gt;-&gt; btl_openib_component_register()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;*	for all string variables it allocated a memory block (var-&gt;mbv_storage
</span><br>
<span class="quotelev1">&gt;= PTR)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;At this time a new var group id:114 (of parent group id: 112) is created
</span><br>
<span class="quotelev1">&gt;for all openib component variables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2) This var group is de-registered in ompi_mpi_init. It marks all
</span><br>
<span class="quotelev1">&gt;variables as invalid. but, the group&amp;vars is still exist
</span><br>
<span class="quotelev1">&gt;main &gt; start_pes&gt; shmem_init -&gt; oshmem_shmem_init -&gt; mca_pml_base_select
</span><br>
<span class="quotelev1">&gt;-&gt; mca_base_components_close -&gt; ... -&gt; mca_bml_base_close -&gt;
</span><br>
<span class="quotelev1">&gt;mca_base_framework_close -&gt; mca_base_var_group_deregister(groupid: 114) *
</span><br>
<span class="quotelev1">&gt;all string variables memory is deallocated ( set var-&gt;mbv_storage = NULL;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;3) because of step 2). btl_openib.so shared lib dlclosed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;4) Now we are reopening openib in yoda and registering the openib
</span><br>
<span class="quotelev1">&gt;variables again.
</span><br>
<span class="quotelev1">&gt;main &gt; start_pes&gt; shmem_init &gt; oshmem_shmem_init -&gt; _shmem_init -&gt;
</span><br>
<span class="quotelev1">&gt;mca_base_framework_open -&gt; mca_spml_base_open&gt;
</span><br>
<span class="quotelev1">&gt;mca_spml_yoda_component_open-&gt; ..... mca_bml_base_open... -&gt;
</span><br>
<span class="quotelev1">&gt;btl_openib_component_register -&gt; register_variables()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;*	In register_variables(), var_find() finds this variable( from the same
</span><br>
<span class="quotelev1">&gt;old group: 114) and reset the variables.
</span><br>
<span class="quotelev1">&gt;*	For string variables, it allocated the buffers again (
</span><br>
<span class="quotelev1">&gt;(var-&gt;mbv_storage = PTR)
</span><br>
<span class="quotelev1">&gt;*	note that group:114 is not belongs to yoda component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;5) In yoda component close, it never finds above group(114) because this
</span><br>
<span class="quotelev1">&gt;is not belongs to this component. So, do not call
</span><br>
<span class="quotelev1">&gt;mca_base_var_group_deregister() again on the var group. string var memory
</span><br>
<span class="quotelev1">&gt;is not deallocated.
</span><br>
<span class="quotelev1">&gt;main &gt; start_pes&gt; shmem_init &gt; oshmem_shmem_init -&gt; _shmem_init -&gt;
</span><br>
<span class="quotelev1">&gt;mca_spml_base_select -&gt;..&gt; mca_spml_yoda_component_close -&gt;
</span><br>
<span class="quotelev1">&gt;mca_bml_base_close -&gt; mca_base_var_group_find().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;6) because of step 5), the btl_openib.so is dlclosed(). This step
</span><br>
<span class="quotelev1">&gt;invalidates, all openib string vars memory ( var-&gt;mbv_storage = PTR)
</span><br>
<span class="quotelev1">&gt;allocated in step 4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;7) in ompi_mpi_finalize(), it will loop through all vars and finalizes
</span><br>
<span class="quotelev1">&gt;and deallocate the string var memory (var-&gt;mbv_storage = PTR)
</span><br>
<span class="quotelev1">&gt;ompi_mpi_finalize &gt;...&gt; mca_base_var_finalize * var-&gt;mbv_storage = PTR is
</span><br>
<span class="quotelev1">&gt;invalid at this stage and causing the SEGFAULT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This also explains why Dinar's patch, kostul_fix.patch
</span><br>
<span class="quotelev1">&gt;(<a href="http://bgate.mellanox.com/redmine/attachments/1643/kostul_fix.patch">http://bgate.mellanox.com/redmine/attachments/1643/kostul_fix.patch</a>),
</span><br>
<span class="quotelev1">&gt;resolves the issue. His patch prevents you from finding the invalid
</span><br>
<span class="quotelev1">&gt;already opened params.
</span><br>
<span class="quotelev1">&gt;So, I see in a lot of these registration functions the signature has an
</span><br>
<span class="quotelev1">&gt;entry for the project name, but now, NULL, is always passed. I see a note
</span><br>
<span class="quotelev1">&gt;by Nathan in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;../opal/mca/base/mca_base_var.c +1311
</span><br>
<span class="quotelev1">&gt;{
</span><br>
<span class="quotelev1">&gt;/* XXX -- component_update -- We will stash the project name in the
</span><br>
<span class="quotelev1">&gt;component */
</span><br>
<span class="quotelev1">&gt;return mca_base_var_register (NULL, component-&gt;mca_type_name,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Seems knowing the project name, oshmem, would allow us to distinguish
</span><br>
<span class="quotelev1">&gt;between the different BMLs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Nathan, please advise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Nathan Hjelm
</span><br>
<span class="quotelev1">&gt;Sent: Monday, December 16, 2013 12:44 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] bug in mca framework?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Mon, Dec 16, 2013 at 05:21:05PM +0000, Joshua Ladd wrote:
</span><br>
<span class="quotelev2">&gt;&gt; After speaking with Igor Ivanov about this this morning, he summarized
</span><br>
<span class="quotelev2">&gt;&gt;his findings as follows:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Valgrind comes up clean.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thats good to hear but unfortunate since this seems really like a
</span><br>
<span class="quotelev1">&gt;stomping-on-memory problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. The issue is not reproduced with a static build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is a red-herring. The variable itself contains garbage. The
</span><br>
<span class="quotelev1">&gt;mbv_storage pointer looked like it was on the stack, the name was not
</span><br>
<span class="quotelev1">&gt;valid, etc. Not sure how we got an mca_base_var_t into that state since
</span><br>
<span class="quotelev1">&gt;the only time we touch anything in them is in mca_base_var_finalize. That
</span><br>
<span class="quotelev1">&gt;functions cleans up all of the state to two calls to it should be
</span><br>
<span class="quotelev1">&gt;harmless.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. A bisection study reveals that problems first appear after commit:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/28800/trunk/opal/mca/base">https://svn.open-mpi.org/trac/ompi/changeset/28800/trunk/opal/mca/base</a>
</span><br>
<span class="quotelev2">&gt;&gt; /mca_base_var.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Possibly also a coincidence. That commit only 1) moves the group stuff
</span><br>
<span class="quotelev1">&gt;into its own file, and 2) adds the mca_base_pvar interface. Its possible
</span><br>
<span class="quotelev1">&gt;I messed something up in the rest of the code but unlikely. I will take
</span><br>
<span class="quotelev1">&gt;another look though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff
</span><br>
<span class="quotelev2">&gt;&gt; Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, December 16, 2013 12:15 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] bug in mca framework?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It might be worthwhile to run this through valgrind and see if
</span><br>
<span class="quotelev2">&gt;&gt;something is being freed incorrectly...?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 16, 2013, at 12:11 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I took a look at the stacktraces last week and could not identify
</span><br>
<span class="quotelev3">&gt;&gt; &gt; where the bug is. I will dig deeper this week and see if I can come
</span><br>
<span class="quotelev2">&gt;&gt;up with the correct fix.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Nathan
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Mon, Dec 09, 2013 at 03:17:36PM +0200, Mike Dubman wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;   Nathan,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;   Could you please comment on the Igor`s observations?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;   Thanks
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;   On Wed, Dec 4, 2013 at 4:44 PM, Igor Ivanov
</span><br>
<span class="quotelev2">&gt;&gt;&lt;igor.ivanov_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;   wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     On 04.12.2013 17:56, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;       On Dec 4, 2013, at 2:52 AM, Igor Ivanov
</span><br>
<span class="quotelev2">&gt;&gt;&lt;Igor.Ivanov_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;       wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         It is the first mca variable with type as string from
</span><br>
<span class="quotelev2">&gt;&gt;btl/openib as
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         'device_param_files'. Actually you can disable it and get
</span><br>
<span class="quotelev2">&gt;&gt;failure on
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         the second.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         Description of case we see:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         1. openib mca variables are registered during startup as
</span><br>
<span class="quotelev2">&gt;&gt;stage at
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         select component phase;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         2. but a winner is cm component and openib mca variables are
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         deregistered as part of mca group;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         3. mca variables are not removed from global mca array but
</span><br>
<span class="quotelev2">&gt;&gt;they
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         marked as invalid and memory for string is freed;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         4. shmem needs openib for yoda and does bml initialization;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         5. openib mca variables are registered againusing light mode
</span><br>
<span class="quotelev2">&gt;&gt;as
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         searching itself in global array and refreshing their
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; fields again;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;       Can you explain what you mean by step 5?  I.e., what does
</span><br>
<span class="quotelev2">&gt;&gt;&quot;using light
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;       mode&quot; mean?  Is the openib component register function invoked
</span><br>
<span class="quotelev2">&gt;&gt;again?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     It is correct, it is called twice. &quot;light mode&quot; means that
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     mca_base_var_register() does not allocate mca variable object
</span><br>
<span class="quotelev2">&gt;&gt;again, it
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     seeks this variable in global array and finding it updates
</span><br>
<span class="quotelev2">&gt;&gt;fields in
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     mca_base_var_t structure (at least mbv_storage).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         6. for unknown reason bml finalization does not clean these
</span><br>
<span class="quotelev2">&gt;&gt;vars as
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         it is done in step 2;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         7. mca_btl_openib.so is unloaded;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         8. opal_finalize() destroys mca variables form global array,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         observes openib`s variable, try destroy using non accessed
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; address;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         So a code that is under discussion fixes step 6.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;       Nathan: it sounds like an MCA var (and entire group) is
</span><br>
<span class="quotelev2">&gt;&gt;registered,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;       unregistered, and then registered again. Does the MCA var
</span><br>
<span class="quotelev2">&gt;&gt;system get
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;       confused here when it tries to unregister the group a 2nd time?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     Probably issue relates incorrect recognition if variable
</span><br>
<span class="quotelev2">&gt;&gt;valid/invalid
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     during second call of mca_base_var_deregister().
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13458.php">Jeff Squyres (jsquyres): "[OMPI devel] Default mapping / binding"</a>
<li><strong>Previous message:</strong> <a href="13456.php">Jeff Squyres (jsquyres): "[OMPI devel] Results of OMPI developer's meeting last week"</a>
<li><strong>In reply to:</strong> <a href="13455.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13559.php">Igor Ivanov: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13559.php">Igor Ivanov: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
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
