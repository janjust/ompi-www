<?
$subject_val = "Re: [OMPI devel] PMIX deadlock";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 11:21:53 2015" -->
<!-- isoreceived="20151030152153" -->
<!-- sent="Fri, 30 Oct 2015 08:21:47 -0700" -->
<!-- isosent="20151030152147" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PMIX deadlock" -->
<!-- id="D9D5D8E8-C655-4311-89CB-66E4DBCA9D9A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="A278D430-43F8-41D5-9F4B-47DAD5494A91_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PMIX deadlock<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 11:21:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18324.php">Barrett, Brian: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Previous message:</strong> <a href="18322.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>In reply to:</strong> <a href="18322.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18334.php">Artem Polyakov: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18334.php">Artem Polyakov: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;ve verified that the orte/util/listener thread is not being started, so I don&#226;&#128;&#153;t think it should be involved in this problem.
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Oct 30, 2015, at 8:07 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm&#226;&#128;&#166;there is a hook that would allow the PMIx server to utilize that listener thread, but we aren&#226;&#128;&#153;t currently using it. Each daemon plus mpirun will call orte_start_listener, but nothing is currently registering and so the listener in that code is supposed to just return without starting the thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the only listener thread that should exist is the one inside the PMIx server itself. If something else is happening, then that would be a bug. I can look at the orte listener code to ensure that the thread isn&#226;&#128;&#153;t incorrectly starting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 29, 2015, at 10:03 PM, George Bosilca &lt;bosilca_at_[hidden] &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Some progress, that puzzles me but might help you understand. Once the deadlock appears, if I manually kill the MPI process on the node where the deadlock was created, the local orte daemon doesn't notice and will just keep waiting.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Quick question: I am under the impression that the issue is not in the PMIX server but somewhere around the listener_thread_fn in orte/util/listener.c. Possible ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Oct 28, 2015 at 3:56 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Should have also clarified: the prior fixes are indeed in the current master.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 28, 2015, at 12:42 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nope - I was wrong. The correction on the client side consisted of attempting to timeout if the blocking recv failed. We then modified the blocking send/recv so they would handle errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So that problem occurred -after- the server had correctly called accept. The listener code is in opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_listener.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks to me like the only way we could drop the accept (assuming the OS doesn&#226;&#128;&#153;t lose it) is if the file descriptor lies outside the expected range once we fall out of select:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /* Spin accepting connections until all active listen sockets
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          * do not have any incoming connections, pushing each connection
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          * onto the event queue for processing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         do {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             accepted_connections = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             /* according to the man pages, select replaces the given descriptor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              * set with a subset consisting of those descriptors that are ready
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              * for the specified operation - in this case, a read. So we need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              * first check to see if this file descriptor is included in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              * returned subset
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             if (0 == FD_ISSET(pmix_server_globals.listen_socket, &amp;readfds)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 /* this descriptor is not included */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 continue;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             /* this descriptor is ready to be read, which means a connection
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              * request has been received - so harvest it. All we want to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              * here is accept the connection and push the info onto the event
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              * library for subsequent processing - we don't want to actually
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              * process the connection here as it takes too long, and so the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              * OS might start rejecting connections due to timeout.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             pending_connection = PMIX_NEW(pmix_pending_connection_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             event_assign(&amp;pending_connection-&gt;ev, pmix_globals.evbase, -1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          EV_WRITE, connection_handler, pending_connection);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             pending_connection-&gt;sd = accept(pmix_server_globals.listen_socket,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                             (struct sockaddr*)&amp;(pending_connection-&gt;addr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                             &amp;addrlen);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             if (pending_connection-&gt;sd &lt; 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 PMIX_RELEASE(pending_connection);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 if (pmix_socket_errno != EAGAIN ||
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     pmix_socket_errno != EWOULDBLOCK) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     if (EMFILE == pmix_socket_errno) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         PMIX_ERROR_LOG(PMIX_ERR_OUT_OF_RESOURCE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         pmix_output(0, &quot;listen_thread: accept() failed: %s (%d).&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                     strerror(pmix_socket_errno), pmix_socket_errno);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     goto done;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 continue;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             pmix_output_verbose(8, pmix_globals.debug_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                 &quot;listen_thread: new connection: (%d, %d)&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                 pending_connection-&gt;sd, pmix_socket_errno);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             /* activate the event */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             event_active(&amp;pending_connection-&gt;ev, EV_WRITE, 1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             accepted_connections++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         } while (accepted_connections &gt; 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 28, 2015, at 12:25 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Looking at the code, it appears that a fix was committed for this problem, and that we correctly resolved the issue found by Paul. The problem is that the fix didn&#226;&#128;&#153;t get upstreamed, and so it was lost the next time we refreshed PMIx. Sigh.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Let me try to recreate the fix and have you take a gander at it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 28, 2015, at 12:22 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is the discussion - afraid it is fairly lengthy. Ignore the hwloc references in it as that was a separate issue:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18074.php">http://www.open-mpi.org/community/lists/devel/2015/09/18074.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/18074.php">http://www.open-mpi.org/community/lists/devel/2015/09/18074.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It definitely sounds like the same issue creeping in again. I&#226;&#128;&#153;d appreciate any thoughts on how to correct it. If it helps, you could look at the PMIx master - there are standalone tests in the test/simple directory that fork/exec a child and just do the connection.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="https://github.com/pmix/master">https://github.com/pmix/master</a> &lt;<a href="https://github.com/pmix/master">https://github.com/pmix/master</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The test server is simptest.c - it will spawn a single copy of simpclient.c by default.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Oct 27, 2015, at 10:14 PM, George Bosilca &lt;bosilca_at_[hidden] &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Interesting. Do you have a pointer to the commit (or/and to the discussion)?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I looked at the PMIX code, and I have identified few issues, but unfortunately none of them seem to fix the problem for good. However, now I need more than 1000 runs to get a deadlock (instead of few tens).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Looking with &quot;netstat -ax&quot; at the status of the UDS while the processes are deadlocked, I see 2 UDS with the same name: one from the server which is in LISTEN state, and one for the client which is being in CONNECTING state (while the client already sent a message in the socket and is now waiting in a blocking receive). This somehow suggest that the server has not yet called accept on the UDS. Unfortunately, there are 3 threads all doing different flavors of even_base and select, so I have a hard time tracking the path of the UDS on the server side.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So in order to validate my assumption I wrote a minimalistic UDS client and server application and tried different scenarios. The conclusion is that in order to see the same type of output from &quot;netstat -ax&quot; I have to call listen on the server, connect on the client and do not call accept on the server.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; With the same occasion I also confirmed that the UDS are holding the data sent so there is no need for further synchronization for the case where the data is sent first. We only need to find out how the server forgets to call accept.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Tue, Oct 27, 2015 at 7:52 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hmmm&#226;&#128;&#166;this looks like it might be that problem we previously saw where the blocking recv hangs in a proc when the blocking send tries to send before the domain socket is actually ready, and so the send fails on the other end. As I recall, it was something to do with the socketoptions - and then Paul had a problem on some of his machines, and we backed it out?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I wonder if that&#226;&#128;&#153;s what is biting us here again, and what we need is to either remove the blocking send/recv&#226;&#128;&#153;s altogether, or figure out a way to wait until the socket is really ready.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any thoughts?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 27, 2015, at 4:11 PM, George Bosilca &lt;bosilca_at_[hidden] &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It appear the branch solve the problem at least partially. I asked one of my students to hammer it pretty badly, and he reported that the deadlocks still occur. He also graciously provided some stacktraces:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #0  0x00007f4bd5274aed in nanosleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #1  0x00007f4bd52a9c94 in usleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #2  0x00007f4bd2e42b00 in OPAL_PMIX_PMIX1XX_PMIx_Fence (procs=0x0, nprocs=0, info=0x7fff3c561960, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     ninfo=1) at src/client/pmix_client_fence.c:100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #3  0x00007f4bd306e6d2 in pmix1_fence (procs=0x0, collect_data=1) at pmix1_client.c:306
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #4  0x00007f4bd57d5cc3 in ompi_mpi_init (argc=3, argv=0x7fff3c561ea8, requested=3, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     provided=0x7fff3c561d84) at runtime/ompi_mpi_init.c:644
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #5  0x00007f4bd5813399 in PMPI_Init_thread (argc=0x7fff3c561d7c, argv=0x7fff3c561d70, required=3, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     provided=0x7fff3c561d84) at pinit_thread.c:69
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #6  0x0000000000401516 in main (argc=3, argv=0x7fff3c561ea8) at osu_mbw_mr.c:86
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; And another process:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #0  0x00007f7b9d7d8bdc in recv () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #1  0x00007f7b9b0aa42d in opal_pmix_pmix1xx_pmix_usock_recv_blocking (sd=13, data=0x7ffd62139004 &quot;&quot;, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     size=4) at src/usock/usock.c:168
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #2  0x00007f7b9b0af5d9 in recv_connect_ack (sd=13) at src/client/pmix_client.c:844
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #3  0x00007f7b9b0b085e in usock_connect (addr=0x7ffd62139330) at src/client/pmix_client.c:1110
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #4  0x00007f7b9b0acc24 in connect_to_server (address=0x7ffd62139330, cbdata=0x7ffd621390e0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     at src/client/pmix_client.c:181
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #5  0x00007f7b9b0ad569 in OPAL_PMIX_PMIX1XX_PMIx_Init (proc=0x7f7b9b4e9b60)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     at src/client/pmix_client.c:362
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #6  0x00007f7b9b2dbd9d in pmix1_client_init () at pmix1_client.c:99
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #7  0x00007f7b9b4eb95f in pmi_component_query (module=0x7ffd62139490, priority=0x7ffd6213948c)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     at ess_pmi_component.c:90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #8  0x00007f7b9ce70ec5 in mca_base_select (type_name=0x7f7b9d20e059 &quot;ess&quot;, output_id=-1, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     components_available=0x7f7b9d431eb0, best_module=0x7ffd621394d0, best_component=0x7ffd621394d8, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     priority_out=0x0) at mca_base_components_select.c:77
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #9  0x00007f7b9d1a956b in orte_ess_base_select () at base/ess_base_select.c:40
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #10 0x00007f7b9d160449 in orte_init (pargc=0x0, pargv=0x0, flags=32) at runtime/orte_init.c:219
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #11 0x00007f7b9da4377a in ompi_mpi_init (argc=3, argv=0x7ffd621397f8, requested=3, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     provided=0x7ffd621396d4) at runtime/ompi_mpi_init.c:488
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #12 0x00007f7b9da81399 in PMPI_Init_thread (argc=0x7ffd621396cc, argv=0x7ffd621396c0, required=3, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     provided=0x7ffd621396d4) at pinit_thread.c:69
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #13 0x0000000000401516 in main (argc=3, argv=0x7ffd621397f8) at osu_mbw_mr.c:86
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tue, Oct 27, 2015 at 2:36 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I haven&#226;&#128;&#153;t been able to replicate this when using the branch in this PR:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi/pull/1073">https://github.com/open-mpi/ompi/pull/1073</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/1073">https://github.com/open-mpi/ompi/pull/1073</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Would you mind giving it a try? It fixes some other race conditions and might pick this one up too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 27, 2015, at 10:04 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Okay, I&#226;&#128;&#153;ll take a look - I&#226;&#128;&#153;ve been chasing a race condition that might be related
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 27, 2015, at 9:54 AM, George Bosilca &lt;bosilca_at_[hidden] &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; No, it's using 2 nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tue, Oct 27, 2015 at 12:35 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is this on a single node?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 27, 2015, at 9:25 AM, George Bosilca &lt;bosilca_at_[hidden] &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I get intermittent deadlocks wit the latest trunk. The smallest reproducer is a shell for loop around a small (2 processes) short (20 seconds) MPI application. After few tens of iterations the MPI_Init will deadlock with the following backtrace:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #0  0x00007fa94b5d9aed in nanosleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #1  0x00007fa94b60ec94 in usleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #2  0x00007fa94960ba08 in OPAL_PMIX_PMIX1XX_PMIx_Fence (procs=0x0, nprocs=0, info=0x7ffd7934fb90, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     ninfo=1) at src/client/pmix_client_fence.c:100
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #3  0x00007fa9498376a2 in pmix1_fence (procs=0x0, collect_data=1) at pmix1_client.c:305
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #4  0x00007fa94bb39ba4 in ompi_mpi_init (argc=3, argv=0x7ffd793500a8, requested=3, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     provided=0x7ffd7934ff94) at runtime/ompi_mpi_init.c:645
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #5  0x00007fa94bb77281 in PMPI_Init_thread (argc=0x7ffd7934ff8c, argv=0x7ffd7934ff80, required=3, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     provided=0x7ffd7934ff94) at pinit_thread.c:69
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #6  0x000000000040150f in main (argc=3, argv=0x7ffd793500a8) at osu_mbw_mr.c:86
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On my machines this is reproducible at 100% after anywhere between 50 and 100 iterations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     George.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18280.php">http://www.open-mpi.org/community/lists/devel/2015/10/18280.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18280.php">http://www.open-mpi.org/community/lists/devel/2015/10/18280.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18281.php">http://www.open-mpi.org/community/lists/devel/2015/10/18281.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18281.php">http://www.open-mpi.org/community/lists/devel/2015/10/18281.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18282.php">http://www.open-mpi.org/community/lists/devel/2015/10/18282.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18282.php">http://www.open-mpi.org/community/lists/devel/2015/10/18282.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18284.php">http://www.open-mpi.org/community/lists/devel/2015/10/18284.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18284.php">http://www.open-mpi.org/community/lists/devel/2015/10/18284.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18292.php">http://www.open-mpi.org/community/lists/devel/2015/10/18292.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18292.php">http://www.open-mpi.org/community/lists/devel/2015/10/18292.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18294.php">http://www.open-mpi.org/community/lists/devel/2015/10/18294.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18294.php">http://www.open-mpi.org/community/lists/devel/2015/10/18294.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18302.php">http://www.open-mpi.org/community/lists/devel/2015/10/18302.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18302.php">http://www.open-mpi.org/community/lists/devel/2015/10/18302.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18309.php">http://www.open-mpi.org/community/lists/devel/2015/10/18309.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18309.php">http://www.open-mpi.org/community/lists/devel/2015/10/18309.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18320.php">http://www.open-mpi.org/community/lists/devel/2015/10/18320.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18323/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18324.php">Barrett, Brian: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Previous message:</strong> <a href="18322.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>In reply to:</strong> <a href="18322.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18334.php">Artem Polyakov: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18334.php">Artem Polyakov: "Re: [OMPI devel] PMIX deadlock"</a>
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
