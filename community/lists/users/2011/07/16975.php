<?
$subject_val = "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 22 15:10:30 2011" -->
<!-- isoreceived="20110722191030" -->
<!-- sent="Fri, 22 Jul 2011 15:10:25 -0400" -->
<!-- isosent="20110722191025" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0" -->
<!-- id="F04DC84B-E067-4A7A-934B-311A30CAD081_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="19B24AD7-98DA-40FA-A9FD-42E70F94C312_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-22 15:10:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16976.php">Gus Correa: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on	ScientificLinux6.0"</a>
<li><strong>Previous message:</strong> <a href="16974.php">Jeff Squyres: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<li><strong>In reply to:</strong> <a href="16974.php">Jeff Squyres: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16976.php">Gus Correa: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on	ScientificLinux6.0"</a>
<li><strong>Reply:</strong> <a href="16976.php">Gus Correa: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on	ScientificLinux6.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah -- Ralph pointed out the relevant line to me in your first mail that I initially missed:
<br>
<p><span class="quotelev1">&gt; In each case I build 16 versions at all (4 compiler * 32bit/64bit *
</span><br>
<span class="quotelev1">&gt; support for multithreading ON/OFF). The same error arise in all 16 versions.
</span><br>
<p>Perhaps you should just expand the tarball once and then do VPATH builds...?
<br>
<p>Something like this:
<br>
<p>tar xf openmpi-1.5.3.tar.bz2
<br>
cd openmpi-1.5.3
<br>
<p>mkdir build-gcc
<br>
cd build-gcc
<br>
../configure ........blah..........
<br>
make -j 4
<br>
make install
<br>
cd ..
<br>
<p>mkdir build-icc
<br>
../configure CC=icc CXX=icpc FC=ifort F77=ifort ......blah.....
<br>
make -j 4
<br>
make install
<br>
cd .. 
<br>
<p>....etc.
<br>
<p>This allows you to have one set of source and have N different builds from it.  Open MPI uses the GNU Autotools correctly to support this kind of build pattern.
<br>
<p><p><p><p>On Jul 22, 2011, at 2:37 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Your RUNME script is a *very* strange way to build Open MPI.  It starts with a massive copy:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cp -r /home/pk224850/OpenMPI/openmpi-1.5.3/AUTHORS /home/pk224850/OpenMPI/openmpi-1.5.3/CMakeLists.txt &lt;...much snipped...&gt; .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why are you doing this kind of copy?  I suspect that the GNU autotools' timestamps are getting all out of whack when you do this kind of copy, and therefore when you run &quot;configure&quot;, it tries to re-autogen itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be clear: when you expand OMPI from a tarball, you shouldn't need the GNU Autotools installed at all -- the tarball is pre-bootstrapped exactly to avoid you needing to use the Autotools (much less any specific version of the Autotools).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect that if you do this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; tar xf openmpi-1.5.3.tar.bz2
</span><br>
<span class="quotelev1">&gt; cd openmpi-1.5.3
</span><br>
<span class="quotelev1">&gt; ./configure ....etc.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; everything will work just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 22, 2011, at 11:12 AM, Paul Kapinos wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI volks,
</span><br>
<span class="quotelev2">&gt;&gt; currently I have a problem by building the version 1.5.3 of OpenMPI on
</span><br>
<span class="quotelev2">&gt;&gt; Scientific Linux 6.0 systems, which seem vor me to be a configuration
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After the configure run (which seem to terminate without error code),
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;gmake all&quot; stage produces errors and exits.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Typical is the output below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fancy: the 1.4.3 version on same computer can be build with no special
</span><br>
<span class="quotelev2">&gt;&gt; trouble. Both the 1.4.3 and 1.5.3 versions can be build on other
</span><br>
<span class="quotelev2">&gt;&gt; computer running CentOS 5.6.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In each case I build 16 versions at all (4 compiler * 32bit/64bit *
</span><br>
<span class="quotelev2">&gt;&gt; support for multithreading ON/OFF). The same error arise in all 16 versions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can someone give a hint about how to avoid this issue? Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best wishes,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Some logs and configure are downloadable here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://gigamove.rz.rwth-aachen.de/d/id/2jM6MEa2nveJJD">https://gigamove.rz.rwth-aachen.de/d/id/2jM6MEa2nveJJD</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The configure line is in RUNME.sh, the
</span><br>
<span class="quotelev2">&gt;&gt; logs of configure and build stage in log_* files; I also attached the
</span><br>
<span class="quotelev2">&gt;&gt; config.log file and the configure itself (which is the standard from the
</span><br>
<span class="quotelev2">&gt;&gt; 1.5.3 release).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ######################################################################
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd . &amp;&amp; /bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/pk224850/linuxc2_11254/openmpi-1.5.3mt_linux64_gcc/config/missing
</span><br>
<span class="quotelev2">&gt;&gt; --run aclocal-1.11 -I config
</span><br>
<span class="quotelev2">&gt;&gt; sh: config/ompi_get_version.sh: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/m4: esyscmd subprocess failed
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;last message repeated 12x&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:953: warning: OMPI_CONFIGURE_SETUP is m4_require'd but not
</span><br>
<span class="quotelev2">&gt;&gt; m4_defun'd
</span><br>
<span class="quotelev2">&gt;&gt; config/ompi_mca.m4:37: OMPI_MCA is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:953: the top level
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:953: warning: AC_COMPILE_IFELSE was called before
</span><br>
<span class="quotelev2">&gt;&gt; AC_USE_SYSTEM_EXTENSIONS
</span><br>
<span class="quotelev2">&gt;&gt; ../../lib/autoconf/specific.m4:386: AC_USE_SYSTEM_EXTENSIONS is expanded
</span><br>
<span class="quotelev2">&gt;&gt; from...
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/paffinity/hwloc/hwloc/config/hwloc.m4:152:
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_SETUP_CORE_AFTER_C99 is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; ../../lib/m4sugar/m4sh.m4:505: AS_IF is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/paffinity/hwloc/hwloc/config/hwloc.m4:22: HWLOC_SETUP_CORE is
</span><br>
<span class="quotelev2">&gt;&gt; expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/paffinity/hwloc/configure.m4:40: MCA_paffinity_hwloc_CONFIG is
</span><br>
<span class="quotelev2">&gt;&gt; expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; config/ompi_mca.m4:540: MCA_CONFIGURE_M4_CONFIG_COMPONENT is expanded
</span><br>
<span class="quotelev2">&gt;&gt; from...
</span><br>
<span class="quotelev2">&gt;&gt; config/ompi_mca.m4:326: MCA_CONFIGURE_FRAMEWORK is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; config/ompi_mca.m4:247: MCA_CONFIGURE_PROJECT is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:953: warning: AC_RUN_IFELSE was called before
</span><br>
<span class="quotelev2">&gt;&gt; AC_USE_SYSTEM_EXTENSIONS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev2">&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +49 241/80-24915
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="16976.php">Gus Correa: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on	ScientificLinux6.0"</a>
<li><strong>Previous message:</strong> <a href="16974.php">Jeff Squyres: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<li><strong>In reply to:</strong> <a href="16974.php">Jeff Squyres: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16976.php">Gus Correa: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on	ScientificLinux6.0"</a>
<li><strong>Reply:</strong> <a href="16976.php">Gus Correa: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on	ScientificLinux6.0"</a>
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
