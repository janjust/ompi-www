<?
$subject_val = "Re: [OMPI users] -Re Post- MPI_SUM is not defined on the	MPI_INTEGER datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 29 08:46:03 2013" -->
<!-- isoreceived="20130529124603" -->
<!-- sent="Wed, 29 May 2013 12:45:50 +0000" -->
<!-- isosent="20130529124550" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] -Re Post- MPI_SUM is not defined on the	MPI_INTEGER datatype" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F647BF7_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="08569AE3-790D-4269-BCFB-B8A2DAAEBB89_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] -Re Post- MPI_SUM is not defined on the	MPI_INTEGER datatype<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-29 08:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21976.php">Blosch, Edwin L: "[OMPI users] Question on building OpenMPI with support for memory affinity"</a>
<li><strong>Previous message:</strong> <a href="21974.php">George Bosilca: "Re: [OMPI users] -Re Post- MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>In reply to:</strong> <a href="21974.php">George Bosilca: "Re: [OMPI users] -Re Post- MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>I've confirmed that it works with 1.6.4 and am awaiting additional information from this user.
<br>
<p><p>On May 29, 2013, at 8:08 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; I can't check on the 1.6.4 posted on the web but I can confirm this test works as expected on the current 1.6 branch (the next to be 1.6.5). So this might have been fixed along the way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 27, 2013, at 07:05 , Hayato KUNIIE &lt;kuni255_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I posted this topic in last week.
</span><br>
<span class="quotelev2">&gt;&gt; But Information about this problem was few.
</span><br>
<span class="quotelev2">&gt;&gt; And I post again with more information.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I build bewulf type PC Cluster (Cent OS release 6.4). And I studing
</span><br>
<span class="quotelev2">&gt;&gt; about MPI.(Open MPI Ver.1.6.4) I tried following sample which using
</span><br>
<span class="quotelev2">&gt;&gt; MPI_REDUCE (FORTRAN).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then, following Error occured.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [bwslv01:30793] *** An error occurred in MPI_Reduce: the reduction
</span><br>
<span class="quotelev2">&gt;&gt; operation MPI_SUM is not defined on the MPI_INTEGER datatype
</span><br>
<span class="quotelev2">&gt;&gt; [bwslv01:30793] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [bwslv01:30793] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev2">&gt;&gt; [bwslv01:30793] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------- All informaion is showd in attached file err.log. and source file is attached as main.f
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This cluster system consist of one head node and 2 slave nodes.
</span><br>
<span class="quotelev2">&gt;&gt; And sharing home directory in head node by NFS. so Open MPI is installed
</span><br>
<span class="quotelev2">&gt;&gt; each nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I test this program on only head node, program is run correctly.
</span><br>
<span class="quotelev2">&gt;&gt; and output result.
</span><br>
<span class="quotelev2">&gt;&gt; But When I test this program on only slave node, same error occured.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please tell me, good idea or advise.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Other information is included attached file.
</span><br>
<span class="quotelev2">&gt;&gt; Following is construction of directories .
</span><br>
<span class="quotelev2">&gt;&gt; ompiReport
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#156;&#226;&#148;&#128;&#226;&#148;&#128; head
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#130; &#226;&#148;&#156;&#226;&#148;&#128;&#226;&#148;&#128; config.log // Item 3 on help page
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#130; &#226;&#148;&#156;&#226;&#148;&#128;&#226;&#148;&#128; ifocnfig.txt // Item 8 on help page
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#130; &#226;&#148;&#156;&#226;&#148;&#128;&#226;&#148;&#128; lstopo.txt // Item 5 on help page
</span><br>
<span class="quotelev2">&gt;&gt; | |---- PATH.txt // Item 7 on help page
</span><br>
<span class="quotelev2">&gt;&gt; | |---- LD_LIBRARY_PATH.txt // Item 7 on help page
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#130; &#226;&#148;&#148;&#226;&#148;&#128;&#226;&#148;&#128; ompi_info_all.txt // Item 4 on help page
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#156;&#226;&#148;&#128;&#226;&#148;&#128; ompi_info_full.txt // Item 6 on help page
</span><br>
<span class="quotelev2">&gt;&gt; |---- main.f // source file
</span><br>
<span class="quotelev2">&gt;&gt; |---- err.log // error message
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#156;&#226;&#148;&#128;&#226;&#148;&#128; slv01
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#130; &#226;&#148;&#156;&#226;&#148;&#128;&#226;&#148;&#128; config.log // Item 3 on help page
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#130; &#226;&#148;&#156;&#226;&#148;&#128;&#226;&#148;&#128; ifconfig.txt // Item 8 on help page
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#130; &#226;&#148;&#156;&#226;&#148;&#128;&#226;&#148;&#128; lstopo.txt // Item 5 on help page
</span><br>
<span class="quotelev2">&gt;&gt; | |---- PATH.txt // Item 7 on help page
</span><br>
<span class="quotelev2">&gt;&gt; | |---- LD_LIBRARY_PATH.txt // Item 7 on help page
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#130; &#226;&#148;&#148;&#226;&#148;&#128;&#226;&#148;&#128; ompi_info_all.txt // Item 4 on help page
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#148;&#226;&#148;&#128;&#226;&#148;&#128; slv02
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#156;&#226;&#148;&#128;&#226;&#148;&#128; config.log // Item 3 on help page
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#156;&#226;&#148;&#128;&#226;&#148;&#128; ifconfig.txt // Item 8 on help page
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#156;&#226;&#148;&#128;&#226;&#148;&#128; lstopo.txt // Item 5 on help page
</span><br>
<span class="quotelev2">&gt;&gt; |---- PATH.txt // Item 7 on help page
</span><br>
<span class="quotelev2">&gt;&gt; |---- LD_LIBRARY_PATH.txt // Item 7 on help page
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#148;&#148;&#226;&#148;&#128;&#226;&#148;&#128; ompi_info_all.txt // Item 4 on help page
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3 directories, 13 files
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (2013/05/16 23:24), Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (OFF LIST)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let's figure this out off-list and post the final resolution back to the list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is quite odd.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You launched this mpirun from a single node, right?  I'm trying to make sure that you're doing non-interactive logins on the remote nodes to find the ompi_info's, because sometimes there's a difference between paths that are set for interactive and non-interactive logins.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 16, 2013, at 9:53 AM, Hayato KUNIIE &lt;kuni255_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Following is result of mpirun ompi_info on three_nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; three nodes version is same.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Package: Open MPI root_at_bwhead.clnet Distribution  Open MPI root_at_bwslv01 Distribution  Open MPI root_at_bwslv02 Distribution
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI: 1.6.4  1.6.4  1.6.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI SVN revision: r28081  r28081  r28081
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI release date: Feb 19, 2013  Feb 19, 2013  Feb 19, 2013
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open RTE: 1.6.4  1.6.4  1.6.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open RTE SVN revision: r28081  r28081  r28081
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open RTE release date: Feb 19, 2013  Feb 19, 2013  Feb 19, 2013
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL: 1.6.4  1.6.4  1.6.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL SVN revision: r28081  r28081  r28081
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL release date: Feb 19, 2013  Feb 19, 2013  Feb 19, 2013
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI API: 2.1  2.1  2.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ident string: 1.6.4  1.6.4  1.6.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Prefix: /usr/local  /usr/local  /usr/local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configured architecture: x86_64-unknown-linux-gnu x86_64-unknown-linux-gnu  x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configure host: bwhead.clnet  bwslv01  bwslv02
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configured by: root  root  root
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configured on: Wed May  8 20:38:14 JST 2013 45 JST 2013 29 JST 2013
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configure host: bwhead.clnet  bwslv01  bwslv02
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Built by: root  root  root
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Built on: Wed May  8 20:48:44 JST 2013 43 JST 2013 38 JST 2013
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Built host: bwhead.clnet  bwslv01  bwslv02
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C bindings: yes  yes  yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ bindings: yes  yes  yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran77 bindings: yes (all)  yes (all)  yes (all)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 bindings: yes  yes  yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 bindings size: small  small  small
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C compiler: gcc  gcc  gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C compiler absolute: /usr/bin/gcc  /usr/bin/gcc  /usr/bin/gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C compiler family name: GNU  GNU  GNU
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C compiler version: 4.4.7  4.4.7  4.4.7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ compiler: g++  g++  g++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ compiler absolute: /usr/bin/g++  /usr/bin/g++  /usr/bin/g++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran77 compiler: gfortran  gfortran  gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran77 compiler abs: /usr/bin/gfortran  /usr/bin/gfortran /usr/bin/gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 compiler: gfortran  gfortran  gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 compiler abs: /usr/bin/gfortran  /usr/bin/gfortran /usr/bin/gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C profiling: yes  yes  yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ profiling: yes  yes  yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran77 profiling: yes  yes  yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 profiling: yes  yes  yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ exceptions: no  no  no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no) no)  no)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sparse Groups: no  no  no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Internal debug support: no  no  no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI interface warnings: no  no  no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI parameter check: runtime  runtime  runtime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Memory profiling support: no  no  no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Memory debugging support: no  no  no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libltdl support: yes  yes  yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Heterogeneous support: no  no  no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun default --prefix: no  no  no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI I/O support: yes  yes  yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_WTIME support: gettimeofday  gettimeofday  gettimeofday
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Symbol vis. support: yes  yes  yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Host topology support: yes  yes  yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI extensions: affinity example  affinity example  affinity example
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FT Checkpoint support: no (checkpoint thread: no)  no)  no)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; VampirTrace support: yes  yes  yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_PROCESSOR_NAME: 256  256  256
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_ERROR_STRING: 256  256  256
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_OBJECT_NAME: 64  64  64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_INFO_KEY: 36  36  36
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_INFO_VAL: 256  256  256
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_PORT_NAME: 1024  1024  1024
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_DATAREP_STRING: 128  128  128
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Package: Open MPI root_at_bwslv01 Distribution  execinfo (MCA v2.0, API v2.0, Component v1.6.4)  execinfo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI: 1.6.4  linux (MCA v2.0, API v2.0, Component v1.6.4) linux (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI SVN revision: r28081  hwloc (MCA v2.0, API v2.0, Component v1.6.4)  hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI release date: Feb 19, 2013  auto_detect (MCA v2.0, API v2.0, Component v1.6.4)  auto_detect (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open RTE: 1.6.4  file (MCA v2.0, API v2.0, Component v1.6.4)  file (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open RTE SVN revision: r28081  mmap (MCA v2.0, API v2.0, Component v1.6.4)  mmap (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open RTE release date: Feb 19, 2013  posix (MCA v2.0, API v2.0, Component v1.6.4)  posix (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL: 1.6.4  sysv (MCA v2.0, API v2.0, Component v1.6.4)  sysv (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL SVN revision: r28081  first_use (MCA v2.0, API v2.0, Component v1.6.4)  first_use (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL release date: Feb 19, 2013  hwloc (MCA v2.0, API v2.0, Component v1.6.4)  hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI API: 2.1  linux (MCA v2.0, API v2.0, Component v1.6.4)  linux (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ident string: 1.6.4  env (MCA v2.0, API v2.0, Component v1.6.4) env (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Prefix: /usr/local  config (MCA v2.0, API v2.0, Component v1.6.4) config (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configured architecture: x86_64-unknown-linux-gnu  linux (MCA v2.0, API v2.0, Component v1.6.4)  linux (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configure host: bwslv01  hwloc132 (MCA v2.0, API v2.0, Component v1.6.4)  hwloc132 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configured by: root  orte (MCA v2.0, API v2.0, Component v1.6.4) orte (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configured on: Wed May  8 20:56:45 JST 2013  orte (MCA v2.0, API v2.0, Component v1.6.4)  orte (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configure host: bwslv01  basic (MCA v2.0, API v2.0, Component v1.6.4)  basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Built by: root  bucket (MCA v2.0, API v2.0, Component v1.6.4) bucket (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Built on: Wed May  8 21:05:43 JST 2013  basic (MCA v2.0, API v2.0, Component v1.6.4)  basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Built host: bwslv01  hierarch (MCA v2.0, API v2.0, Component v1.6.4)  hierarch (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C bindings: yes  inter (MCA v2.0, API v2.0, Component v1.6.4) inter (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ bindings: yes  self (MCA v2.0, API v2.0, Component v1.6.4) self (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran77 bindings: yes (all)  sm (MCA v2.0, API v2.0, Component v1.6.4)  sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 bindings: yes  sync (MCA v2.0, API v2.0, Component v1.6.4)  sync (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 bindings size: small  tuned (MCA v2.0, API v2.0, Component v1.6.4)  tuned (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C compiler: gcc  romio (MCA v2.0, API v2.0, Component v1.6.4) romio (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C compiler absolute: /usr/bin/gcc  fake (MCA v2.0, API v2.0, Component v1.6.4)  fake (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C compiler family name: GNU  rdma (MCA v2.0, API v2.0, Component v1.6.4)  rdma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C compiler version: 4.4.7  sm (MCA v2.0, API v2.0, Component v1.6.4)  sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ compiler: g++  bfo (MCA v2.0, API v2.0, Component v1.6.4)  bfo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ compiler absolute: /usr/bin/g++  csum (MCA v2.0, API v2.0, Component v1.6.4)  csum (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran77 compiler: gfortran  ob1 (MCA v2.0, API v2.0, Component v1.6.4)  ob1 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran77 compiler abs: /usr/bin/gfortran  v (MCA v2.0, API v2.0, Component v1.6.4)  v (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 compiler: gfortran  r2 (MCA v2.0, API v2.0, Component v1.6.4)  r2 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 compiler abs: /usr/bin/gfortran  vma (MCA v2.0, API v2.0, Component v1.6.4)  vma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C profiling: yes  self (MCA v2.0, API v2.0, Component v1.6.4) self (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ profiling: yes  sm (MCA v2.0, API v2.0, Component v1.6.4)  sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran77 profiling: yes  tcp (MCA v2.0, API v2.0, Component v1.6.4)  tcp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 profiling: yes  unity (MCA v2.0, API v2.0, Component v1.6.4)  unity (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ exceptions: no  pt2pt (MCA v2.0, API v2.0, Component v1.6.4) pt2pt (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no) rdma (MCA v2.0, API v2.0, Component v1.6.4)  rdma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sparse Groups: no  hnp (MCA v2.0, API v2.0, Component v1.6.4)  hnp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Internal debug support: no  orted (MCA v2.0, API v2.0, Component v1.6.4)  orted (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI interface warnings: no  tool (MCA v2.0, API v2.0, Component v1.6.4)  tool (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI parameter check: runtime  tcp (MCA v2.0, API v2.0, Component v1.6.4)  tcp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Memory profiling support: no  default (MCA v2.0, API v2.0, Component v1.6.4)  default (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Memory debugging support: no  cm (MCA v2.0, API v2.0, Component v1.6.4)  cm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libltdl support: yes  loadleveler (MCA v2.0, API v2.0, Component v1.6.4)  loadleveler (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Heterogeneous support: no  slurm (MCA v2.0, API v2.0, Component v1.6.4)  slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun default --prefix: no  load_balance (MCA v2.0, API v2.0, Component v1.6.4)  load_balance (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI I/O support: yes  rank_file (MCA v2.0, API v2.0, Component v1.6.4)  rank_file (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_WTIME support: gettimeofday  resilient (MCA v2.0, API v2.0, Component v1.6.4)  resilient (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Symbol vis. support: yes  round_robin (MCA v2.0, API v2.0, Component v1.6.4)  round_robin (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Host topology support: yes  seq (MCA v2.0, API v2.0, Component v1.6.4)  seq (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI extensions: affinity example  topo (MCA v2.0, API v2.0, Component v1.6.4)  topo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FT Checkpoint support: no (checkpoint thread: no)  oob (MCA v2.0, API v2.0, Component v1.6.4)  oob (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; VampirTrace support: yes  binomial (MCA v2.0, API v2.0, Component v1.6.4)  binomial (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_PROCESSOR_NAME: 256  cm (MCA v2.0, API v2.0, Component v1.6.4)  cm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_ERROR_STRING: 256  direct (MCA v2.0, API v2.0, Component v1.6.4)  direct (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_OBJECT_NAME: 64  linear (MCA v2.0, API v2.0, Component v1.6.4)  linear (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_INFO_KEY: 36  radix (MCA v2.0, API v2.0, Component v1.6.4)  radix (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_INFO_VAL: 256  slave (MCA v2.0, API v2.0, Component v1.6.4)  slave (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_PORT_NAME: 1024  rsh (MCA v2.0, API v2.0, Component v1.6.4)  rsh (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_DATAREP_STRING: 128  slurm (MCA v2.0, API v2.0, Component v1.6.4)  slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Package: Open MPI root_at_bwslv02 Distribution  rsh (MCA v2.0, API v2.0, Component v1.6.4)  rsh (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI: 1.6.4  default (MCA v2.0, API v2.0, Component v1.6.4) default (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI SVN revision: r28081  env (MCA v2.0, API v2.0, Component v1.6.4)  env (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI release date: Feb 19, 2013  hnp (MCA v2.0, API v2.0, Component v1.6.4)  hnp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open RTE: 1.6.4  singleton (MCA v2.0, API v2.0, Component v1.6.4) singleton (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open RTE SVN revision: r28081  slave (MCA v2.0, API v2.0, Component v1.6.4)  slave (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open RTE release date: Feb 19, 2013  slurm (MCA v2.0, API v2.0, Component v1.6.4)  slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL: 1.6.4  slurmd (MCA v2.0, API v2.0, Component v1.6.4)  slurmd (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL SVN revision: r28081  tool (MCA v2.0, API v2.0, Component v1.6.4)  tool (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL release date: Feb 19, 2013  bad (MCA v2.0, API v2.0, Component v1.6.4)  bad (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI API: 2.1  basic (MCA v2.0, API v2.0, Component v1.6.4)  basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ident string: 1.6.4  hier (MCA v2.0, API v2.0, Component v1.6.4) hier (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Prefix: /usr/local  command (MCA v2.0, API v1.0, Component v1.6.4)  command (MCA v2.0, API v1.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configured architecture: x86_64-unknown-linux-gnu  syslog (MCA v2.0, API v1.0, Component v1.6.4)  syslog (MCA v2.0, API v1.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configure host: bwslv02
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configured by: root
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configured on: Wed May  8 20:56:29 JST 2013
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configure host: bwslv02
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Built by: root
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Built on: Wed May  8 21:05:38 JST 2013
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Built host: bwslv02
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C bindings: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ bindings: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 bindings: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C compiler: gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C compiler family name: GNU
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C compiler version: 4.4.7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ compiler: g++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran77 compiler: gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 compiler: gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran77 profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ exceptions: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sparse Groups: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Internal debug support: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI interface warnings: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI parameter check: runtime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libltdl support: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Heterogeneous support: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI I/O support: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Symbol vis. support: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Host topology support: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI extensions: affinity example
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; VampirTrace support: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA memory: linux (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA carto: file (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA timer: linux (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA sysinfo: linux (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: inter (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: self (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: sync (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA io: romio (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pml: csum (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pml: v (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA btl: self (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA btl: sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA topo: unity (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA iof: orted (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA iof: tool (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA odls: default (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ras: cm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rml: oob (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: cm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: direct (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: linear (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: radix (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: slave (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: env (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: singleton (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: slave (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: tool (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA notifier: command (MCA v2.0, API v1.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA memory: linux (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA carto: file (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA timer: linux (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA sysinfo: linux (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: inter (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: self (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: sync (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA io: romio (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pml: csum (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pml: v (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA btl: self (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA btl: sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA topo: unity (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA iof: orted (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA iof: tool (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA odls: default (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ras: cm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rml: oob (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: cm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: direct (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: linear (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: radix (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: slave (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: env (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: singleton (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: slave (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: tool (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA notifier: command (MCA v2.0, API v1.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA memory: linux (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA carto: file (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA timer: linux (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA sysinfo: linux (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: inter (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: self (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: sync (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA io: romio (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pml: csum (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pml: v (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA btl: self (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA btl: sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA topo: unity (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA iof: orted (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA iof: tool (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA odls: default (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ras: cm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA rml: oob (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: cm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: direct (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: linear (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: radix (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA routed: slave (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: env (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: singleton (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: slave (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ess: tool (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA notifier: command (MCA v2.0, API v1.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (2013/05/16 9:12), Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am unable to replicate your error -- 1.6.4 has MPI_REDUCE defined on MPI_SUM properly.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Are you absolutely sure you're using OMPI 1.6.4 on all nodes?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Try this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mpirun ... ompi_info
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (insert whatever hostfile and -np value you're using for your fortran test) and see what is reported as the OMPI version from other nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On May 15, 2013, at 7:46 AM, Hayato KUNIIE &lt;kuni255_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I using Ver, 1.6.4 in all nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (2013/05/15 7:10), Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are you sure that you have exactly the same version of Open MPI on all your nodes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 14, 2013, at 11:39 AM, Hayato KUNIIE &lt;kuni255_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello I'm kuni255
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I build bewulf type PC Cluster (Cent OS release 6.4). And I studing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; about MPI.(Open MPI Ver.1.6.4) I tried following sample which using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_REDUCE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Then, Error occured.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This cluster system consist of one head node and 2 slave nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; And sharing home directory in head node by NFS. so Open MPI is installed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; each nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I test this program on only head node, program is run correctly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and output result.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But When I test this program on only slave node, same error occured.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please tell me, good idea : )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Error message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bwslv01:30793] *** An error occurred in MPI_Reduce: the reduction
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; operation MPI_SUM is not defined on the MPI_INTEGER datatype
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bwslv01:30793] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bwslv01:30793] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bwslv01:30793] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun has exited due to process rank 1 with PID 30793 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; node bwslv01 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bwhead.clnet:02147] 1 more process has sent help message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bwhead.clnet:02147] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to see all help / error messages
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Fortran90 source code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; include 'mpif.h'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; parameter(nmax=12)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; integer n(nmax)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; call mpi_init(ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; call mpi_comm_size(MPI_COMM_WORLD, isize, ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; call mpi_comm_rank(MPI_COMM_WORLD, irank, ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ista=irank*(nmax/isize) + 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; iend=ista+(nmax/isize-1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; isum=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; do i=1,nmax
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; n(i) = i
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; isum = isum + n(i)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; end do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; call mpi_reduce(isum, itmp, 1, MPI_INTEGER, MPI_SUM,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp; 0, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; if (irank == 0) then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; isum=itmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; WRITE(*,*) isum
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; call mpi_finalize(ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; end
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompiReport.tar.xz&gt;_______________________________________________
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21976.php">Blosch, Edwin L: "[OMPI users] Question on building OpenMPI with support for memory affinity"</a>
<li><strong>Previous message:</strong> <a href="21974.php">George Bosilca: "Re: [OMPI users] -Re Post- MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>In reply to:</strong> <a href="21974.php">George Bosilca: "Re: [OMPI users] -Re Post- MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
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
