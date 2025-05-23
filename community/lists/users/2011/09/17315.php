<?
$subject_val = "Re: [OMPI users] openmpi configure error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 16 07:45:06 2011" -->
<!-- isoreceived="20110916114506" -->
<!-- sent="Fri, 16 Sep 2011 07:44:57 -0400" -->
<!-- isosent="20110916114457" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configure error" -->
<!-- id="FAA332C9-B4A6-4346-B1B7-04723818F9DA_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="122ea0c8.1c5df.13271f98cdc.Coremail.hwp22651304_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi configure error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-16 07:44:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17316.php">郝文平: "Re: [OMPI users] openmpi configure error"</a>
<li><strong>Previous message:</strong> <a href="17314.php">&#186;&#194;&#206;&#196;&#198;&#189;: "Re: [OMPI users] openmpi configure error"</a>
<li><strong>In reply to:</strong> <a href="17314.php">&#186;&#194;&#206;&#196;&#198;&#189;: "Re: [OMPI users] openmpi configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17316.php">郝文平: "Re: [OMPI users] openmpi configure error"</a>
<li><strong>Reply:</strong> <a href="17316.php">郝文平: "Re: [OMPI users] openmpi configure error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is highlighted in the configure output:
<br>
<p><span class="quotelev2">&gt;&gt; checking whether build environment is sane... configure: error: newly created file is older than distributed files!
</span><br>
<span class="quotelev2">&gt;&gt; Check your system clock
</span><br>
<p>Don't use touch.  Fix your system clock and re-untar the Open MPI tarball.  Then configure will work fine.
<br>
<p><p><p>On Sep 16, 2011, at 7:22 AM, &#233;&#131;&#157;&#230;&#150;&#135;&#229;&#185;&#179; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your reply.Before I configured OPENMPI,I used the commond &quot;touch * &quot;. It did work. But i think the mistake is that: &quot;configure: error: Failed to build GNU libltdl.  This usually means that something is incorrectly setup with your environment.  There may be useful information in opal/libltdl/config.log.  You can also disable GNU libltdl (which will disable
</span><br>
<span class="quotelev1">&gt; dynamic shared object loading) by configuring with --disable-dlopen.&quot; Hope your comments.
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At 2011-09-15 20:11:22,&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; OMPI 1.2.6 is fairly ancient; you might want to upgrade. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is your systems clock. Set it properly and configure should be ok. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 14, 2011, at 11:21 PM, &#233;&#131;&#157;&#230;&#150;&#135;&#229;&#185;&#179; &lt;hwp22651304_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;   When i try to compile openmpi-1.2.6.tar.bz2 on my computer with ifort Compilier.My system is Red Hat4.6 86x64.But some mistakes happen when the process of configuring.Mistakes as follows:
</span><br>
<span class="quotelev2">&gt;&gt; $./configure --prefix=~/haowp/opt/openmpi FC=ifort F90=ifort
</span><br>
<span class="quotelev2">&gt;&gt; .........
</span><br>
<span class="quotelev2">&gt;&gt; ......
</span><br>
<span class="quotelev2">&gt;&gt; *** GNU libltdl setup
</span><br>
<span class="quotelev2">&gt;&gt; configure: OMPI configuring in opal/libltdl
</span><br>
<span class="quotelev2">&gt;&gt; configure: running /bin/sh './configure'  '--prefix=/stg/s1p1/users/yuanjm/haowp/opt/openmpi' 'FC=ifort' 'F90=ifort' --enable-ltdl-convenience --disable-ltdl-install --enable-shared --disable-static --cache-file=/dev/null --srcdir=.
</span><br>
<span class="quotelev2">&gt;&gt; checking for a BSD-compatible install... /usr/bin/install -c
</span><br>
<span class="quotelev2">&gt;&gt; checking whether build environment is sane... configure: error: newly created file is older than distributed files!
</span><br>
<span class="quotelev2">&gt;&gt; Check your system clock
</span><br>
<span class="quotelev2">&gt;&gt; configure: /bin/sh './configure' *failed* for opal/libltdl
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Failed to build GNU libltdl.  This usually means that something
</span><br>
<span class="quotelev2">&gt;&gt; is incorrectly setup with your environment.  There may be useful information in
</span><br>
<span class="quotelev2">&gt;&gt; opal/libltdl/config.log.  You can also disable GNU libltdl (which will disable
</span><br>
<span class="quotelev2">&gt;&gt; dynamic shared object loading) by configuring with --disable-dlopen.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; $vi /opml/libltdl/config.log
</span><br>
<span class="quotelev2">&gt;&gt; ## ----------- ##
</span><br>
<span class="quotelev2">&gt;&gt; ## confdefs.h. ##
</span><br>
<span class="quotelev2">&gt;&gt; ## ----------- ##
</span><br>
<span class="quotelev2">&gt;&gt; #define PACKAGE_NAME &quot;libltdl&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #define PACKAGE_TARNAME &quot;libltdl&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #define PACKAGE_VERSION &quot;2.1a&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #define PACKAGE_STRING &quot;libltdl 2.1a&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #define PACKAGE_BUGREPORT &quot;bug-libtool_at_[hidden]&quot;
</span><br>
<span class="quotelev2">&gt;&gt; configure: exit 1
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your attention.Hope your reply.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;                                                          haowp
</span><br>
<span class="quotelev2">&gt;&gt;                                                           Sep.15.2011
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At 2011-09-15 00:32:32,&quot;Ralph Castain&quot; &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;On Sep 14, 2011, at 9:39 AM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thanks, Ralph,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I get the failure messages, unfortunately:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; setgid FAILED
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; setgid FAILED
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; setgid FAILED
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I actually had attempted to call setgid from within the application previously, which looks similar to what you've done, but it failed. That was when I initiated the post to the mailing list. My conclusion, a guess really, was that Linux would not let me setgid from within my program because I was not root.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;I was afraid of that - the documentation seemed to indicate that would be the case, but I figured it was worth a quick try. Sorry I can't be of help.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; From: 
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; ] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Sent: Wednesday, September 14, 2011 8:15 AM
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; The attached should set the gid of the remote daemons (and their children) to the gid of mpirun. No cmd line option or anything is required - it will just always do it.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Would you mind giving it a try?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Please let me know if/how it works.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17316.php">郝文平: "Re: [OMPI users] openmpi configure error"</a>
<li><strong>Previous message:</strong> <a href="17314.php">&#186;&#194;&#206;&#196;&#198;&#189;: "Re: [OMPI users] openmpi configure error"</a>
<li><strong>In reply to:</strong> <a href="17314.php">&#186;&#194;&#206;&#196;&#198;&#189;: "Re: [OMPI users] openmpi configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17316.php">郝文平: "Re: [OMPI users] openmpi configure error"</a>
<li><strong>Reply:</strong> <a href="17316.php">郝文平: "Re: [OMPI users] openmpi configure error"</a>
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
