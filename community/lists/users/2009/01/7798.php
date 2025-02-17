<?
$subject_val = "Re: [OMPI users] dead lock in MPI_Finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 10:02:41 2009" -->
<!-- isoreceived="20090123150241" -->
<!-- sent="Fri, 23 Jan 2009 10:02:29 -0500" -->
<!-- isosent="20090123150229" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dead lock in MPI_Finalize" -->
<!-- id="302EE9B2-A22F-4BB5-AEB3-E096C0215CED_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4979A366.20200_at_cea.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] dead lock in MPI_Finalize<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 10:02:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7799.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>Previous message:</strong> <a href="7797.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>In reply to:</strong> <a href="7778.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7825.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know what your program is doing but I kind of guess what the  
<br>
problem is. If you use MPI 2 dynamics to spawn or connect two  
<br>
MPI_COMM_WORLD you have to disconnect them before calling  
<br>
MPI_Finalize. The reason is that an MPI_Finalize do the opposite of an  
<br>
MPI_Init, so it is MPI_COMM_WORLD based. Make sure your different  
<br>
world are disconnected before doing the MPI_Finalize should solve the  
<br>
problem.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 23, 2009, at 06:00 , Bernard Secher - SFME/LGLS wrote:
<br>
<p><span class="quotelev1">&gt; No i didn't run this program whith Open-MPI 1.2.X because one said  
</span><br>
<span class="quotelev1">&gt; to me there were many changes between 1.2.X version and 1.3 version  
</span><br>
<span class="quotelev1">&gt; about MPI_publish_name, MPI_Lookup_name (new ompi-server, ...), and  
</span><br>
<span class="quotelev1">&gt; it was better to use 1.3 version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes i am sure all processes reach MPI_Finalize() function because i  
</span><br>
<span class="quotelev1">&gt; write message just before (it is the END_OF macro in my program),  
</span><br>
<span class="quotelev1">&gt; and i am sure all processes are locked in MPI_Finalize() function  
</span><br>
<span class="quotelev1">&gt; beacause i write message just after (it is the MESSAGE macro).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; May be all MPI_Sends are not matched  by corresponding MPI_Recvs,...  
</span><br>
<span class="quotelev1">&gt; It can be a possibility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Bernard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jody a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi Bernard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The structure looks as far as i can see.
</span><br>
<span class="quotelev2">&gt;&gt; Did it run OK on Open-MPI 1.2.X?
</span><br>
<span class="quotelev2">&gt;&gt; So are you sure all processes reach the MPI_Finalize command?
</span><br>
<span class="quotelev2">&gt;&gt; Usually MPI_Finalize only completes when all processes reach it.
</span><br>
<span class="quotelev2">&gt;&gt; I think you should also make sure that all MPI_Sends are matched by
</span><br>
<span class="quotelev2">&gt;&gt; corresponding MPI_Recvs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 23, 2009 at 11:08 AM, Bernard Secher - SFME/LGLS
</span><br>
<span class="quotelev2">&gt;&gt; &lt;bernard.secher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Jody for your answer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I launch 2 instances of my program on 2 processes each instance,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use MPI_Publish_name, MPI_Lookup_name  to create a global  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicator on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the 4 processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then the 4 processes exchange data.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The main program is a CORBA server. I send you this program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bernard
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jody a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For instance:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - how many processes on how many machines,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - what kind of computation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - perhaps minimal code which reproduces this failing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - configuration settings, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See: <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Without any information except for &quot;it doesn't work&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nobody can give you any help whatsoever.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Jan 23, 2009 at 9:33 AM, Bernard Secher - SFME/LGLS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;bernard.secher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't understand what you mean by &quot;A _detailed_ description of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failing&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is a dead lock in MPI_Finalize() function. All  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blocked in this MPI_Finalize() function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bernard
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Per this note on the &quot;getting help&quot; page, we still need the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;A _detailed_ description of what is failing. The more details  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provide, the better. E-mails saying &quot;My application doesn't work!&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inevitably be answered with requests for more information about  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exactly what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't work; so please include as much information detailed in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your initial
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e-mail as possible.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Additionally:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;The best way to get help is to provide a &quot;recipie&quot; for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reproducing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 22, 2009, at 8:53 AM, Bernard Secher - SFME/LGLS wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Tim,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I send you the information in join files.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bernard
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim Mattox a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jan 21, 2009 at 8:58 AM, Bernard Secher - SFME/LGLS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;bernard.secher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a case wher i have a dead lock in MPI_Finalize() function  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openMPI v1.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can some body help me please?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bernard
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      _\\|//_
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (' 0 0 ')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ____ooO  (_)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ooo______________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bernard S&#233;cher  DEN/DM2S/SFME/LGLS    mailto : bsecher_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CEA Saclay, B&#226;t 454, Pi&#232;ce 114        Phone  : 33 (0)1 69 08 73 78
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 91191 Gif-sur-Yvette Cedex, France    Fax    : 33 (0)1 69 08 10 87
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------Oooo---------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      oooO (   )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      (   ) ) /
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       \ ( (_/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        \_)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ce message &#233;lectronique et tous les fichiers attach&#233;s qu'il contient
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sont confidentiels et destin&#233;s exclusivement &#224; l'usage de la  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; personne
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#224; laquelle ils sont adress&#233;s. Si vous avez re&#231;u ce message par  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erreur,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; merci d'en avertir imm&#233;diatement son &#233;metteur et de ne pas en  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conserver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; de copie.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This e-mail and any files transmitted with it are confidential and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intended solely for the use of the individual to whom they are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; addressed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you have received this e-mail in error please inform the sender
</span><br>
<span class="quotelev3">&gt;&gt;&gt; immediately, without keeping any copy thereof.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .log 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .tgz 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ifconfig 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .log 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .tgz 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;&lt;ompi_info.log.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _\\|//_
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      (' 0 0 ')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ____ooO  (_)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ooo______________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bernard S&#233;cher  DEN/DM2S/SFME/LGLS    mailto : bsecher_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CEA Saclay, B&#226;t 454, Pi&#232;ce 114        Phone  : 33 (0)1 69 08 73 78
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 91191 Gif-sur-Yvette Cedex, France    Fax    : 33 (0)1 69 08 10 87
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------Oooo---------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       oooO (   )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       (   ) ) /
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        \ ( (_/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         \_)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ce message &#233;lectronique et tous les fichiers attach&#233;s qu'il contient
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sont confidentiels et destin&#233;s exclusivement &#224; l'usage de la  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; personne
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#224; laquelle ils sont adress&#233;s. Si vous avez re&#231;u ce message par  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erreur,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; merci d'en avertir imm&#233;diatement son &#233;metteur et de ne pas en  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conserver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; de copie.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This e-mail and any files transmitted with it are confidential and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intended solely for the use of the individual to whom they are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; addressed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you have received this e-mail in error please inform the sender
</span><br>
<span class="quotelev3">&gt;&gt;&gt; immediately, without keeping any copy thereof.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7799.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>Previous message:</strong> <a href="7797.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>In reply to:</strong> <a href="7778.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7825.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
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
