<?php
$topdir = "../../..";
$title = "MPI_Neighbor_alltoallw(3) man page (version 4.1.8)";
$meta_desc = "Open MPI v4.1.8 man page: MPI_NEIGHBOR_ALLTOALLW(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<p>
<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Neighbor_alltoallw, <a href="../man3/MPI_Ineighbor_alltoallw.3.php">MPI_Ineighbor_alltoallw</a></b> - All processes
send data of different types to, and receive data of different types from,

<p>all processes
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<p>
<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Neighbor_alltoallw(const void *sendbuf, const int sendcounts[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const MPI_Aint sdispls[], const MPI_Datatype sendtypes[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;void *recvbuf, const int recvcounts[], const MPI_Aint rdispls[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const MPI_Datatype recvtypes[], MPI_Comm comm)
int <a href="../man3/MPI_Ineighbor_alltoallw.3.php">MPI_Ineighbor_alltoallw</a>(const void *sendbuf, const int sendcounts[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const MPI_Aint sdispls[], const MPI_Datatype sendtypes[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;void *recvbuf, const int recvcounts[], const MPI_Aint rdispls[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const MPI_Datatype recvtypes[], MPI_Comm comm, MPI_Request *request)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>USE MPI
! or the older form: INCLUDE &rsquo;mpif.h&rsquo;
MPI_NEIGHBOR_ALLTOALLW(SENDBUF, SENDCOUNTS, SDISPLS, SENDTYPES,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVBUF, RECVCOUNTS, RDISPLS, RECVTYPES, COMM, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF(*), RECVBUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDCOUNTS(*), SENDTYPES(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVCOUNTS(*), RECVTYPES(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER(KIND=MPI_ADDRESS_KIND) SDISPLS(*), RDISPLS(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COMM, IERROR
<a href="../man3/MPI_Ineighbor_alltoallw.3.php">MPI_INEIGHBOR_ALLTOALLW</a>(SENDBUF, SENDCOUNTS, SDISPLS, SENDTYPES,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVBUF, RECVCOUNTS, RDISPLS, RECVTYPES, COMM, REQUEST, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF(*), RECVBUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDCOUNTS(*), SENDTYPES(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVCOUNTS(*), RECVTYPES(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER(KIND=MPI_ADDRESS_KIND) SDISPLS(*), RDISPLS(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COMM, REQUEST, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Fortran 2008 Syntax</a></h2>
<br>
<pre>USE mpi_f08
MPI_Neighbor_alltoallw(sendbuf, sendcounts, sdispls, sendtypes, recvbuf,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;recvcounts, rdispls, recvtypes, comm, ierror)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(*), DIMENSION(..), INTENT(IN) :: sendbuf
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(*), DIMENSION(..) :: recvbuf
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, INTENT(IN) :: sendcounts(*), recvcounts(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER(KIND=MPI_ADDRESS_KIND), INTENT(IN) :: sdispls(*), rdispls(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Datatype), INTENT(IN) :: sendtypes(*), recvtypes(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Comm), INTENT(IN) :: comm
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, OPTIONAL, INTENT(OUT) :: ierror
<a href="../man3/MPI_Ineighbor_alltoallw.3.php">MPI_Ineighbor_alltoallw</a>(sendbuf, sendcounts, sdispls, sendtypes, recvbuf,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;recvcounts, rdispls, recvtypes, comm, request, ierror)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(*), DIMENSION(..), INTENT(IN), ASYNCHRONOUS :: sendbuf
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(*), DIMENSION(..), ASYNCHRONOUS :: recvbuf
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, INTENT(IN), ASYNCHRONOUS :: sendcounts(*), recvcounts(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER(KIND=MPI_ADDRESS_KIND), INTENT(IN), ASYNCHRONOUS ::
<tt> </tt>&nbsp;<tt> </tt>&nbsp;sdispls(*), rdispls(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Datatype), INTENT(IN), ASYNCHRONOUS :: sendtypes(*),
<tt> </tt>&nbsp;<tt> </tt>&nbsp;recvtypes(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Comm), INTENT(IN) :: comm
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Request), INTENT(OUT) :: request
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, OPTIONAL, INTENT(OUT) :: ierror
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>sendbuf </dt>
<dd>Starting address of send buffer. </dd>

<dt>sendcounts </dt>
<dd>Integer
array, where entry i specifies the number of elements to send to neighbor
i. </dd>

<dt>sdispls </dt>
<dd>Integer array, where entry i specifies the displacement (in bytes,
offset from <i>sendbuf</i>) from which to send data to neighbor i. </dd>

<dt>sendtypes </dt>
<dd>Datatype
array, where entry i specifies the datatype to use when sending data to
neighbor i. </dd>

<dt>recvcounts </dt>
<dd>Integer array, where entry j specifies the number
of elements to receive from neighbor j. </dd>

<dt>rdispls </dt>
<dd>Integer array, where entry
j specifies the displacement (in bytes, offset from <i>recvbuf</i>) to which data
from neighbor j should be written. </dd>

<dt>recvtypes </dt>
<dd>Datatype array, where entry
j specifies the datatype to use when receiving data from neighbor j. </dd>

<dt>comm
</dt>
<dd>Communicator over which data is to be exchanged.
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>recvbuf
</dt>
<dd>Address of receive buffer. </dd>

<dt>request </dt>
<dd>Request (handle, non-blocking only). </dd>

<dt>IERROR
</dt>
<dd>Fortran only: Error status.
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
MPI_Neighbor_alltoallw is a generalized
collective operation in which all processes send data to and receive data
from all neighbors. It adds flexibility to <a href="../man3/MPI_Neighbor_alltoallv.3.php">MPI_Neighbor_alltoallv</a> by allowing
the user to specify the datatype of individual data blocks (in addition
to displacement and element count). Its operation can be thought of in the
following way, where each process performs 2n (n being the number of neighbors
in the topology of communicator <i>comm</i>) independent point-to-point communications.
The neighbors and buffer layout are determined by the topology of <i>comm</i>.
<p>
<br>
<pre>        <a href="../man3/MPI_Cart_get.3.php">MPI_Cart_get</a>(comm, maxdims, dims, periods, coords);
        for (dim = 0, i = 0 ; dim &lt; dims ; ++dim) {
            <a href="../man3/MPI_Cart_shift.3.php">MPI_Cart_shift</a>(comm, dim, 1, &amp;r0, &amp;r1);
            <a href="../man3/MPI_Isend.3.php">MPI_Isend</a>(sendbuf + sdispls[i]  * extent(sendtype),
                      sendcount, sendtypes[i], r0, ..., comm, ...);
            <a href="../man3/MPI_Irecv.3.php">MPI_Irecv</a>(recvbuf + rdispls[i] * extent(recvtype),
                      recvcount, recvtypes[i], r0, ..., comm, ...);
            ++i;
            <a href="../man3/MPI_Isend.3.php">MPI_Isend</a>(sendbuf + sdispls[i] * extent(sendtype),
                      sendcount, sendtypes[i], r1, ..., comm, &amp;req[i]);
            <a href="../man3/MPI_Irecv.3.php">MPI_Irecv</a>(recvbuf + rdispls[i] * extent(recvtype),
                      recvcount, recvtypes[i], r1, ..., comm, ...);
            ++i;
        }
        MPI_Wait_all (...);
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<a href="../man3/MPI_Comm_size.3.php">MPI_Comm_size</a>(comm, &amp;n);
<tt> </tt>&nbsp;<tt> </tt>&nbsp;for (i = 0, i &lt; n; i++)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;    <a href="../man3/MPI_Send.3.php">MPI_Send</a>(sendbuf + sdispls[i], sendcounts[i],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;        sendtypes[i], i, ..., comm);
<tt> </tt>&nbsp;<tt> </tt>&nbsp;for (i = 0, i &lt; n; i++)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;    <a href="../man3/MPI_Recv.3.php">MPI_Recv</a>(recvbuf + rdispls[i], recvcounts[i],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;        recvtypes[i], i, ..., comm);
</pre><p>
Process j sends the k-th block of its local <i>sendbuf</i> to neighbor k, which
places the data in the j-th block of its local <i>recvbuf</i>. <p>
When a pair of processes
exchanges data, each may pass different element count and datatype arguments
so long as the sender specifies the same amount of data to send (in bytes)
as the receiver expects to receive. <p>
Note that process i may send a different
amount of data to process j than it receives from process j. Also, a process
may send entirely different amounts and types of data to different processes
in the communicator.
<p> <p>

<h2><a name='sect8' href='#toc8'>Notes</a></h2>
The MPI_IN_PLACE option for <i>sendbuf</i> is not meaningful
for this operation <p>
The specification of counts, types, and displacements
should not cause any location to be written more than once. <p>
All arguments
on all processes are significant. The <i>comm</i> argument, in particular, must
describe the same communicator on all processes. <p>
The offsets of <i>sdispls</i>
and <i>rdispls</i> are measured in bytes. Compare this to <a href="../man3/MPI_Neighbor_alltoallv.3.php">MPI_Neighbor_alltoallv</a>,
where these offsets are measured in units of <i>sendtype</i> and <i>recvtype</i>, respectively.

<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all MPI routines return an error value; C routines as the
value of the function and Fortran routines in the last argument. <p>
Before
the error value is returned, the current MPI error handler is called. By
default, this error handler aborts the MPI job, except for I/O function
errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the
predefined error handler MPI_ERRORS_RETURN may be used to cause error values
to be returned. Note that MPI does not guarantee that an MPI program can
continue past an error.
<p>
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<br>
<pre><a href="../man3/MPI_Neighbor_alltoall.3.php">MPI_Neighbor_alltoall</a>
<a href="../man3/MPI_Neighbor_alltoallv.3.php">MPI_Neighbor_alltoallv</a>
<a href="../man3/MPI_Cart_create.3.php">MPI_Cart_create</a>
<a href="../man3/MPI_Graph_create.3.php">MPI_Graph_create</a>
<a href="../man3/MPI_Dist_graph_create.3.php">MPI_Dist_graph_create</a>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
