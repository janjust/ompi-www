<?
$subject_val = "Re: [OMPI devel] Fwd: Build failed in Jenkins: ompi_upstream_v1.8_build_debug #265";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 22 13:21:46 2014" -->
<!-- isoreceived="20140722172146" -->
<!-- sent="Tue, 22 Jul 2014 10:20:34 -0700" -->
<!-- isosent="20140722172034" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: Build failed in Jenkins: ompi_upstream_v1.8_build_debug #265" -->
<!-- id="5FC13C95-C6B9-4330-8E75-D6B401323F03_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C97FDD43-0068-45D2-A949-AF9C161C2E44_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: Build failed in Jenkins: ompi_upstream_v1.8_build_debug #265<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-22 13:20:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15212.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Build failed in Jenkins:	ompi_upstream_v1.8_build_debug #265"</a>
<li><strong>Previous message:</strong> <a href="15210.php">Dave Goodell (dgoodell): "[OMPI devel] Fwd: Build failed in Jenkins: ompi_upstream_v1.8_build_debug #265"</a>
<li><strong>In reply to:</strong> <a href="15210.php">Dave Goodell (dgoodell): "[OMPI devel] Fwd: Build failed in Jenkins: ompi_upstream_v1.8_build_debug #265"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15212.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Build failed in Jenkins:	ompi_upstream_v1.8_build_debug #265"</a>
<li><strong>Reply:</strong> <a href="15212.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Build failed in Jenkins:	ompi_upstream_v1.8_build_debug #265"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to rm -rf ompi/contrib/vt and then svn up again - it's a stale .deps directory entry
<br>
<p>On Jul 22, 2014, at 10:15 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FYI, this causes build failures in OTF code in our Jenkins installation.  It's probably caused by this commit:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/32265">https://svn.open-mpi.org/trac/ompi/changeset/32265</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have time to track it down myself, unfortunately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: &lt;dgoodell_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Build failed in Jenkins: ompi_upstream_v1.8_build_debug #265
</span><br>
<span class="quotelev2">&gt;&gt; Date: July 22, 2014 12:08:34 PM CDT
</span><br>
<span class="quotelev2">&gt;&gt; To: &lt;usnic-jenkins_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; See &lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/265/changes">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/265/changes</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Changes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rhc] Fixes #4799: Move r32261 to v1.8 branch (Improve verbose message for which devices are being used)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; r32261 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; Improve verbose message which says which device:ports are being used.  Also move where message is generated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rhc] Fixes #4798: Move r32260 to v1.8 branch (common/verbs: fix usnic detection)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; r32260 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; common/verbs: fix usnic detection
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The logic was mishandling the case of a newer kernel and an older
</span><br>
<span class="quotelev2">&gt;&gt; libusnic_verbs.  Simplify usnic_transport() to return constants in the
</span><br>
<span class="quotelev2">&gt;&gt; 2 known cases (not a usNIC device and the TRANSPORT_USNIC_UDP case),
</span><br>
<span class="quotelev2">&gt;&gt; and call the magic probe in all other cases.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Reviewed-by: Dave Goodell &lt;dgoodell_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cmr=v1.8.2:reviewer=ompi-rm1.8
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rhc] Fixes #4797: Move r32259 to v1.8 branch (usnic: explicitly handle case when)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; r32259 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; usnic: explicitly handle case when both endpoints are NULL
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If we don't explicitly declare that (a == NULL &amp;&amp; b == NULL) is
</span><br>
<span class="quotelev2">&gt;&gt; equivalent to qsort, we could end up with wonky sorting order.  I.e.,
</span><br>
<span class="quotelev2">&gt;&gt; it's *possible* that some NULLs could end up in the middle of the
</span><br>
<span class="quotelev2">&gt;&gt; array.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regardless of whether it will ever happen in practice, it makes the
</span><br>
<span class="quotelev2">&gt;&gt; code more clear to also handle the &quot;both are NULL&quot; case.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also fix the 2-spacing indents.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Reviewed by Dave Goodell.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cmr=v1.8.2:reviewer=ompi-rm1.8
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rhc] Fixes #4795: Move r32257 to v1.8 branch (OSHMEM: Set SMA_SYMMETRIC_SIZE to default)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; r32257 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; OSHMEM: Set SMA_SYMMETRIC_SIZE to default value
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OpenSHMEMspec 1.1 introduces a set of environment variables that allows users to configure the Open-SHMEM implementation, and receive information about the implementation.
</span><br>
<span class="quotelev2">&gt;&gt; - Add SMA_SYMMETRIC_SIZE - number of bytes to allocate for symmetric heap
</span><br>
<span class="quotelev2">&gt;&gt; - SHMEM_SYMMETRIC_HEAP_SIZE (Mellanox extension) is used by a user to provide a size of symmetric area. This change sets this env variable in case a user does not set this variable
</span><br>
<span class="quotelev2">&gt;&gt; directly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; fixed by Igor, reviewed by Miked
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cmr=v1.8.2:reviwer=ompi-rm1.8
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rhc] Fixes #4794: Move r32256 to v1.8 branch (MXM: use builk connection establishment)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; r32256 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; MXM: use builk connection establishment API
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; fixed by Vasily, reviewed by Yossi/Miked
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cmr=v1.8.2:reviwer=ompi-rm1.8
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rhc] Fixes #4793: Move r32253 to v1.8 branch (configure.ac: use the portable '=')
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; r32253 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac: use the portable '=' operator for the 'test' command
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks to Kevin M. Buckley for providing the patch
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cmr=v1.8.2:reviewer=rhc
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rhc] Fixes #4791: Move r32245 to v1.8 branch (oshmem: remove automatically generated files)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; r32245 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; oshmem: remove automatically generated files from the tarball
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cmr=v1.8.2:reviewer=miked
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rhc] Fixes #4790: Move r32244 to v1.8 branch (mpi: remove automatically generated file)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; r32244 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; mpi: remove automatically generated file from the tarball
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cmr=v1.8.2:reviewer=jsquyres
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rhc] Fixes #4789: Move r32243 to v1.8 branch (vt: remove automatically generated files)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; r32243 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; vt: remove automatically generated files from the tarball
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cmr=v1.8.2:reviewer=jurenz
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rhc] Fixes #4788: Move r32231 to v1.8 branch (Silence warning)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; r32231 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; Silence warning
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cmr=v1.8.2:reviewer=hjelmn
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rhc] Fixes #4786: Move r29732 to v1.8 branch (BUILD: support new automake)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; r29732 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; Changes to VT/OTF:
</span><br>
<span class="quotelev2">&gt;&gt; Fixed warnings about the need of the 'subdir-objects' option when using Automake v1.14.
</span><br>
<span class="quotelev2">&gt;&gt; Due to a bug in Automake (see <a href="http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928">http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928</a>) the 'subdir-objects' option cannot be enabled.
</span><br>
<span class="quotelev2">&gt;&gt; To get around this problem external sources files are sym linked in the current build directory (as done in ompi/mpi/c/profile) to lead Automake to believe that all source files are in the same directory.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [...truncated 10830 lines...]
</span><br>
<span class="quotelev2">&gt;&gt; CC       prget_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pget_accumulate_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       prget_accumulate_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pput_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       prput_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pcompare_and_swap_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfetch_and_op_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_allocate_shared_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_call_errhandler_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_complete_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_create_errhandler_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_create_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_create_keyval_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_delete_attr_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_fence_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_free_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_free_keyval_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_get_attr_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_get_errhandler_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_get_group_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_get_name_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_lock_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_post_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_set_attr_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_set_errhandler_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_set_name_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_shared_query_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_start_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_test_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_unlock_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_wait_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_flush_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_flush_all_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_flush_local_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pwin_flush_local_all_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_call_errhandler_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_close_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_create_errhandler_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_delete_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_get_amode_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_get_atomicity_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_get_byte_offset_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_get_errhandler_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_get_group_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_get_info_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_get_position_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_get_position_shared_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_get_size_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_get_type_extent_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_get_view_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_iread_at_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_iread_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_iread_shared_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_iwrite_at_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_iwrite_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_iwrite_shared_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_open_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_preallocate_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_read_all_begin_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_read_all_end_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_read_all_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_read_at_all_begin_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_read_at_all_end_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_read_at_all_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_read_at_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_read_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_read_ordered_begin_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_read_ordered_end_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_read_ordered_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_read_shared_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_seek_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_seek_shared_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_set_atomicity_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_set_errhandler_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_set_info_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_set_size_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_set_view_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_sync_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_write_all_begin_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_write_all_end_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_write_all_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_write_at_all_begin_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_write_at_all_end_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_write_at_all_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_write_at_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_write_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_write_ordered_begin_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_write_ordered_end_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_write_ordered_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pfile_write_shared_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       pregister_datarep_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; CCLD     libmpi_mpifh_pmpi.la
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/mpif-h/profile">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/mpif-h/profile</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/mpif-h">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/mpif-h</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CCLD     libmpi_mpifh.la
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/mpif-h">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/mpif-h</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/mpif-h">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/mpif-h</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mpi/fortran/use-mpi-tkr
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/use-mpi-tkr">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/use-mpi-tkr</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PPFC     mpi.lo
</span><br>
<span class="quotelev2">&gt;&gt; FCLD     libmpi_usempi.la
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/use-mpi-tkr">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/use-mpi-tkr</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mpi/fortran/mpiext
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/mpiext">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/mpiext</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/mpiext">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/mpi/fortran/mpiext</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in contrib/vt
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in vt
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/make  all-recursive
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in extlib
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in otf
</span><br>
<span class="quotelev2">&gt;&gt; make[6]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/make  all-recursive
</span><br>
<span class="quotelev2">&gt;&gt; make[7]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in vendor/jenkins_hash
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/vendor/jenkins_hash">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/vendor/jenkins_hash</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CC       libjenkins_hash_la-jenkins_hash.lo
</span><br>
<span class="quotelev2">&gt;&gt; CCLD     libjenkins_hash.la
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/vendor/jenkins_hash">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/vendor/jenkins_hash</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in otflib
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/otflib">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/otflib</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_CopyHandler.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_CopyHandler_stream.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_File.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_File_iofsl.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_FileManager.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_Filenames.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_HandlerArray.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_KeyValue.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_MasterControl.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_Parse.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_RBuffer.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_Reader.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_RStream.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_WBuffer.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_Writer.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_WStream.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libopen_trace_format_la-OTF_inttypes.lo
</span><br>
<span class="quotelev2">&gt;&gt; CCLD     libopen-trace-format.la
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/otflib">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/otflib</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in otfauxlib
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/otfauxlib">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/otfauxlib</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CC       libotfaux_la-OTFAUX_MsgMatching.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libotfaux_la-OTFAUX_Thumbnail.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libotfaux_la-OTFAUX_Process.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       libotfaux_la-OTFAUX_State.lo
</span><br>
<span class="quotelev2">&gt;&gt; CCLD     libotfaux.la
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/otfauxlib">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/otfauxlib</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in otfaux
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfaux">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfaux</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CXX      otfaux.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX      Control.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX      Handler.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX      Stats.o
</span><br>
<span class="quotelev2">&gt;&gt; CXXLD    otfaux
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfaux">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfaux</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in otfconfig
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfconfig">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfconfig</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CC       otfconfig.o
</span><br>
<span class="quotelev2">&gt;&gt; CCLD     otfconfig
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfconfig">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfconfig</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in otfdump
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfdump">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfdump</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CXX      Handler.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX      otfdump.o
</span><br>
<span class="quotelev2">&gt;&gt; CXXLD    otfprint
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfdump">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfdump</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in otfinfo
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfinfo">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfinfo</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CC       handler.o
</span><br>
<span class="quotelev2">&gt;&gt; CC       hash.o
</span><br>
<span class="quotelev2">&gt;&gt; CC       otfinfo.o
</span><br>
<span class="quotelev2">&gt;&gt; CCLD     otfinfo
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfinfo">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfinfo</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in otfmerge
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in .
</span><br>
<span class="quotelev2">&gt;&gt; make[10]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CC       otfmerge-handler.o
</span><br>
<span class="quotelev2">&gt;&gt; CC       otfmerge-otfmerge.o
</span><br>
<span class="quotelev2">&gt;&gt; CCLD     otfmerge
</span><br>
<span class="quotelev2">&gt;&gt; make[10]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mpi
</span><br>
<span class="quotelev2">&gt;&gt; make[10]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ln -s ../../../tools/otfmerge/handler.c handler.c
</span><br>
<span class="quotelev2">&gt;&gt; ln -s ../../../tools/otfmerge/otfmerge.c otfmerge.c
</span><br>
<span class="quotelev2">&gt;&gt; CC       otfmerge_mpi-handler.o
</span><br>
<span class="quotelev2">&gt;&gt; CC       otfmerge_mpi-otfmerge.o
</span><br>
<span class="quotelev2">&gt;&gt; CCLD     otfmerge-mpi
</span><br>
<span class="quotelev2">&gt;&gt; make[10]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in otfprofile
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in .
</span><br>
<span class="quotelev2">&gt;&gt; make[10]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CXX      otfprofile-clustering.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX      otfprofile-collect_data.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX      otfprofile-collect_dispersion.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX      otfprofile-comparison_clinkage.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX      otfprofile-comparison_kmeans.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX      otfprofile-create_csv.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX      otfprofile-create_marker.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX      otfprofile-create_latex.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX      otfprofile-create_filter.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX      otfprofile-otfprofile.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX      otfprofile-process_dispersion.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX      otfprofile-summarize_data.o
</span><br>
<span class="quotelev2">&gt;&gt; CXXLD    otfprofile
</span><br>
<span class="quotelev2">&gt;&gt; make[10]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mpi
</span><br>
<span class="quotelev2">&gt;&gt; make[10]: Entering directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/mpi">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/mpi</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[10]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/mpi">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/mpi</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[10]: *** No rule to make target `../reduce_data.cpp', needed by `otfprofile_mpi-reduce_data.o'.  Stop.
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf/tools</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[7]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[7]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[6]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[6]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib/otf</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt/extlib</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt/vt</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi/contrib/vt</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `&lt;<a href="https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi">https://savbu-usnic.cisco.com/jenkins/job/ompi_upstream_v1.8_build_debug/ws/ompi</a>'&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; srun: error: mpi001: task 0: Exited with exit code 2
</span><br>
<span class="quotelev2">&gt;&gt; +/home/dgoodell/git/savbu-usnic-cluster/jenkins/jenkins-build-ompi.zsh:36&gt; check_status
</span><br>
<span class="quotelev2">&gt;&gt; +check_status:1&gt; eval return 2
</span><br>
<span class="quotelev2">&gt;&gt; +(eval):1&gt; return 2
</span><br>
<span class="quotelev2">&gt;&gt; salloc: Relinquishing job allocation 824885
</span><br>
<span class="quotelev2">&gt;&gt; +/home/dgoodell/git/savbu-usnic-cluster/jenkins/jenkins-submit.zsh:59&gt; salloc_status=2 
</span><br>
<span class="quotelev2">&gt;&gt; +/home/dgoodell/git/savbu-usnic-cluster/jenkins/jenkins-submit.zsh:61&gt; grep 'salloc: error: Failed to allocate resources: More processors requested than permitted' salloc_err.out
</span><br>
<span class="quotelev2">&gt;&gt; +/home/dgoodell/git/savbu-usnic-cluster/jenkins/jenkins-submit.zsh:65&gt; rm -f salloc_err.out
</span><br>
<span class="quotelev2">&gt;&gt; +/home/dgoodell/git/savbu-usnic-cluster/jenkins/jenkins-submit.zsh:66&gt; return 2
</span><br>
<span class="quotelev2">&gt;&gt; Build step 'Execute shell' marked build as failure
</span><br>
<span class="quotelev2">&gt;&gt; Archiving artifacts
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15210.php">http://www.open-mpi.org/community/lists/devel/2014/07/15210.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15212.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Build failed in Jenkins:	ompi_upstream_v1.8_build_debug #265"</a>
<li><strong>Previous message:</strong> <a href="15210.php">Dave Goodell (dgoodell): "[OMPI devel] Fwd: Build failed in Jenkins: ompi_upstream_v1.8_build_debug #265"</a>
<li><strong>In reply to:</strong> <a href="15210.php">Dave Goodell (dgoodell): "[OMPI devel] Fwd: Build failed in Jenkins: ompi_upstream_v1.8_build_debug #265"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15212.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Build failed in Jenkins:	ompi_upstream_v1.8_build_debug #265"</a>
<li><strong>Reply:</strong> <a href="15212.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Build failed in Jenkins:	ompi_upstream_v1.8_build_debug #265"</a>
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
