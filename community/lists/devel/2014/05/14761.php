<?
$subject_val = "Re: [OMPI devel] VPATH builds broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 10:33:12 2014" -->
<!-- isoreceived="20140508143312" -->
<!-- sent="Thu, 8 May 2014 15:33:11 +0100" -->
<!-- isosent="20140508143311" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VPATH builds broken?" -->
<!-- id="5A7B5BDB-FED5-4AB5-A179-31C1F89D81D9_at_pittman.co.uk" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C3BFA995-DCF9-4478-AFC7-BCD92BCF3921_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VPATH builds broken?<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 10:33:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14762.php">Ralph Castain: "Re: [OMPI devel] RFC: continue cleanup of build system abstractions"</a>
<li><strong>Previous message:</strong> <a href="14760.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VPATH builds broken?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, it was something my end.  I had a bug in my build script that it wasn&#146;t wiping the install directory before doing the build.  This might be an indication that something in the build is picking up the install directory in preference to the build directory but I don&#146;t think that would represent a real problem - frankly I&#146;m surprised this worked as long as it did.
<br>
<p>Ashley,
<br>
<p>On 8 May 2014, at 14:52, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm unable to reproduce your error, even with a git clone of the mirror.  Perhaps you need to &quot;git clean -df&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 8, 2014, at 9:09 AM, Ashley Pittman &lt;ashley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I started getting build failures against trunk on the 29th, most likely as a result of this commit:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi-svn-mirror/commit/3f42cbf50670c5b311cc4414dbb3f4ccf762e455">https://github.com/open-mpi/ompi-svn-mirror/commit/3f42cbf50670c5b311cc4414dbb3f4ccf762e455</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It looks like there was another commit almost immediately afterwards which fixed the first problem (include file errors) however I&#146;m still seeing build failures with the following error, I don&#146;t know if this is still aside effect of the previous VPATH problem or something else.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mpi
</span><br>
<span class="quotelev2">&gt;&gt; make[10]: Entering directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
</span><br>
<span class="quotelev2">&gt;&gt; ln -s ../../../../../../../../../../source/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/handler.c handler.c
</span><br>
<span class="quotelev2">&gt;&gt; CC       otfmerge_mpi-handler.o
</span><br>
<span class="quotelev2">&gt;&gt; ln -s ../../../../../../../../../../source/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/otfmerge.c otfmerge.c
</span><br>
<span class="quotelev2">&gt;&gt; CC       otfmerge_mpi-otfmerge.o
</span><br>
<span class="quotelev2">&gt;&gt; CCLD     otfmerge-mpi
</span><br>
<span class="quotelev2">&gt;&gt; /space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `opal_dstore_peer'
</span><br>
<span class="quotelev2">&gt;&gt; /space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `opal_value_load'
</span><br>
<span class="quotelev2">&gt;&gt; /space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `opal_value_unload'
</span><br>
<span class="quotelev2">&gt;&gt; /space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `opal_dstore_nonpeer'
</span><br>
<span class="quotelev2">&gt;&gt; /space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `opal_dstore_internal'
</span><br>
<span class="quotelev2">&gt;&gt; /space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `opal_dstore'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[10]: *** [otfmerge-mpi] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[10]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge'
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/extlib/otf/tools'
</span><br>
<span class="quotelev2">&gt;&gt; make[7]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[7]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/extlib/otf'
</span><br>
<span class="quotelev2">&gt;&gt; make[6]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[6]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/extlib/otf'
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt/extlib'
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi/contrib/vt'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/space/jenkins/workspace/open-mpi/build/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The build script I&#146;m using is fairly simple, it&#146;s working from a clean checkout each time but is doing a &#147;VPATH&#148; or out-of-tree build
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cd source
</span><br>
<span class="quotelev2">&gt;&gt; ./autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt; cd ..
</span><br>
<span class="quotelev2">&gt;&gt; [ -d build ] &amp;&amp; rm -rf build
</span><br>
<span class="quotelev2">&gt;&gt; [ -d build ] &amp;&amp; rm -rf install
</span><br>
<span class="quotelev2">&gt;&gt; mkdir build
</span><br>
<span class="quotelev2">&gt;&gt; cd build
</span><br>
<span class="quotelev2">&gt;&gt; ../source/configure --enable-mpirun-prefix-by-default --prefix $WORKSPACE/install
</span><br>
<span class="quotelev2">&gt;&gt; make
</span><br>
<span class="quotelev2">&gt;&gt; make install
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ashley,
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14753.php">http://www.open-mpi.org/community/lists/devel/2014/05/14753.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14759.php">http://www.open-mpi.org/community/lists/devel/2014/05/14759.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14762.php">Ralph Castain: "Re: [OMPI devel] RFC: continue cleanup of build system abstractions"</a>
<li><strong>Previous message:</strong> <a href="14760.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VPATH builds broken?"</a>
<!-- nextthread="start" -->
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
