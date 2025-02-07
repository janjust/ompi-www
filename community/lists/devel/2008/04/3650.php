<?
$subject_val = "[OMPI devel] MPI_Comm_connect/Accept";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 16:29:56 2008" -->
<!-- isoreceived="20080403202956" -->
<!-- sent="Thu, 3 Apr 2008 16:29:49 -0400" -->
<!-- isosent="20080403202949" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Comm_connect/Accept" -->
<!-- id="411A9500-4E4C-454F-9F0F-2207901DD81E_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Comm_connect/Accept<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 16:29:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3651.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>Previous message:</strong> <a href="3649.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3651.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>Reply:</strong> <a href="3651.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I'm trying to figure out how complete is the implementation of  
<br>
Comm_connect/Accept. I found two problematic cases.
<br>
<p>1) Two different programs are started in two different mpirun. One  
<br>
makes accept, the second one use connect. I would not expect  
<br>
MPI_Publish_name/Lookup_name to work because they do not share the  
<br>
HNP. Still I would expect to be able to connect by copying (with  
<br>
printf-scanf) the port_name string generated by Open_port; especially  
<br>
considering that in Open MPI, the port_name is a string containing the  
<br>
tcp address and port of the rank 0 in the server communicator.  
<br>
However, doing so results in &quot;no route to host&quot; and the connecting  
<br>
application aborts. Is the problem related to an explicit check of the  
<br>
universes on the accept HNP ? Do I expect too much from the MPI  
<br>
standard ? Is it because my two applications does not share the same  
<br>
universe ? Should we (re) add the ability to use the same universe for  
<br>
several mpirun ?
<br>
<p>2) Second issue is when the program setup a port, and then accept  
<br>
multiple clients on this port. Everything works fine for the first  
<br>
client, and then accept stalls forever when waiting for the second  
<br>
one. My understanding of the standard is that it should work: 5.4.2  
<br>
states &quot;it must call MPI_Open_port to establish a port [...] it must  
<br>
call MPI_Comm_accept to accept connections from clients&quot;. I understand  
<br>
that for one MPI_Open_port I should be able to manage several MPI  
<br>
clients. Am I understanding correctly the standard here and should we  
<br>
fix this ?
<br>
<p>Here is a copy of the non-working code for reference.
<br>
<p>/*
<br>
&nbsp;&nbsp;* Copyright (c) 2004-2007 The Trustees of the University of Tennessee.
<br>
&nbsp;&nbsp;*                         All rights reserved.
<br>
&nbsp;&nbsp;* $COPYRIGHT$
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* Additional copyrights may follow
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* $HEADER$
<br>
&nbsp;&nbsp;*/
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char port[MPI_MAX_PORT_NAME];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int np;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;np);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(rank)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm comm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* client */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(port, MPI_MAX_PORT_NAME, MPI_CHAR, 0, 0,  
<br>
MPI_COMM_WORLD, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Read port: %s\n&quot;, port);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_connect(port, MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;comm);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;rank, 1, MPI_INT, 0, 1, comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect(&amp;comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int nc = np - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm *comm_nodes = (MPI_Comm *) calloc(nc,  
<br>
sizeof(MPI_Comm));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request *reqs = (MPI_Request *) calloc(nc,  
<br>
sizeof(MPI_Request));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *event = (int *) calloc(nc, sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Open_port(MPI_INFO_NULL, port);
<br>
/*        MPI_Publish_name(&quot;test_service_el&quot;, MPI_INFO_NULL, port);*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Port name: %s\n&quot;, port);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i = 1; i &lt; np; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(port, MPI_MAX_PORT_NAME, MPI_CHAR, i, 0,  
<br>
MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i = 0; i &lt; nc; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_accept(port, MPI_INFO_NULL, 0, MPI_COMM_SELF,  
<br>
&amp;comm_nodes[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Accept %d\n&quot;, i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;event[i], 1, MPI_INT, 0, 1, comm_nodes[i],  
<br>
&amp;reqs[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;IRecv %d\n&quot;, i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Close_port(port);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Waitall(nc, reqs, MPI_STATUSES_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i = 0; i &lt; nc; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;event[%d] = %d\n&quot;, i, event[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect(&amp;comm_nodes[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Disconnect %d\n&quot;, i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return EXIT_SUCCESS;
<br>
}
<br>
<p><p><p><p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Sr. Research Associate at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 350
* Knoxville, TN 37996
* 865 974 6321
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3651.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>Previous message:</strong> <a href="3649.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3651.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>Reply:</strong> <a href="3651.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
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
