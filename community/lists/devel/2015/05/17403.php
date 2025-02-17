<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 22:54:31 2015" -->
<!-- isoreceived="20150515025431" -->
<!-- sent="Thu, 14 May 2015 20:54:30 -0600" -->
<!-- isosent="20150515025430" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579" -->
<!-- id="CAF1Cqj6TiXJzjC113w3_VnZBO8=w1jFy4xmnWmzGqZ+4s7WwtQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57of-HZT0u9Ge+DWJZxKjeZOYKdC4+65iPOwjdVd-qMYO2Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-14 22:54:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17404.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Previous message:</strong> <a href="17402.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>In reply to:</strong> <a href="17402.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17404.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Reply:</strong> <a href="17404.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this by any chance associated with issue 579?
<br>
<p><p>2015-05-14 20:49 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; I'll look at the lines you cite, but that clearly isn't the problem we are
</span><br>
<span class="quotelev1">&gt; seeing here. I can verify that because the test case:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 sleep 1000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; does not open up any connections at all. Thus, the use-case you describe
</span><br>
<span class="quotelev1">&gt; never occurs - yet we still blow up in memory. If I simply tell the OOB not
</span><br>
<span class="quotelev1">&gt; to set keep alive, the problem goes away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It only happens on Mac, and we never see Mac based clusters, so turning
</span><br>
<span class="quotelev1">&gt; off keep alive on the Mac seems a pretty simple solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 14, 2015 at 8:43 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code pushed in g8e30579 is clearly not the right solution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem starts in oob_tcp_listener.c line 742. A new
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp_pending_connection_t object is allocated to store the incoming
</span><br>
<span class="quotelev2">&gt;&gt; connection. The accept few lines below fails with an error code of 0x23
</span><br>
<span class="quotelev2">&gt;&gt; which means &quot;resource temporary unavailable&quot; on OS X (i.e. EAGAIN). Thus,
</span><br>
<span class="quotelev2">&gt;&gt; the if at line 750 is skipped, and we reach line 763 (a &quot;continue&quot;) with 1)
</span><br>
<span class="quotelev2">&gt;&gt; a connection not accepted, and 2) an allocated object not release. Voila!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Freeing the pending_connection object is not the right approach either,
</span><br>
<span class="quotelev2">&gt;&gt; as it will only remove the memory leak but the process will become a CPU
</span><br>
<span class="quotelev2">&gt;&gt; hog.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, May 14, 2015 at 8:10 PM, &lt;gitdub_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The branch, master has been updated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        via  8e30579e6efab580cf9cf1bec8f8df1376b7e9ef (commit)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       from  1488e82efd1d09c30ba46dfa00b89e623623272f (commit)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev3">&gt;&gt;&gt; revisions in full, below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/8e30579e6efab580cf9cf1bec8f8df1376b7e9ef">https://github.com/open-mpi/ompi/commit/8e30579e6efab580cf9cf1bec8f8df1376b7e9ef</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commit 8e30579e6efab580cf9cf1bec8f8df1376b7e9ef
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date:   Thu May 14 18:09:13 2015 -0600
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The Mac appears to have problems with the keepalive support - once
</span><br>
<span class="quotelev3">&gt;&gt;&gt; keepalive starts, the memory footprint soars. So disable keepalive on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mac
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/config/opal_check_os_flavors.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b/config/opal_check_os_flavors.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index d1d124d..4939560 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/config/opal_check_os_flavors.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/config/opal_check_os_flavors.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -57,6 +57,12 @@ AC_DEFUN([OPAL_CHECK_OS_FLAVORS],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         [$opal_have_solaris],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         [Whether or not we have solaris])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AS_IF([test &quot;$opal_found_apple&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          [opal_have_mac=1], [opal_have_mac=0])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AC_DEFINE_UNQUOTED([OPAL_HAVE_MAC],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       [$opal_have_mac],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       [Whether or not we are on a Mac])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # check for sockaddr_in (a good sign we have TCP)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      AC_CHECK_HEADERS([netdb.h netinet/in.h netinet/tcp.h])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      AC_CHECK_TYPES([struct sockaddr_in],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/orte/mca/oob/tcp/oob_tcp_common.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b/orte/mca/oob/tcp/oob_tcp_common.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index a768472..e3decf2 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/orte/mca/oob/tcp/oob_tcp_common.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/orte/mca/oob/tcp/oob_tcp_common.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -72,7 +72,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /**
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * Set socket buffering
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if defined(SO_KEEPALIVE) &amp;&amp; !OPAL_HAVE_MAC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  static void set_keepalive(int sd)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      int option;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -146,6 +146,7 @@ static void set_keepalive(int sd)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif  // TCP_KEEPCNT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif //SO_KEEPALIVE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  void orte_oob_tcp_set_socket_options(int sd)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -181,7 +182,7 @@ void orte_oob_tcp_set_socket_options(int sd)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              opal_socket_errno);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if defined(SO_KEEPALIVE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if defined(SO_KEEPALIVE) &amp;&amp; !OPAL_HAVE_MAC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (0 &lt; mca_oob_tcp_component.keepalive_time) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          set_keepalive(sd);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index dd1af2a..372ed4c 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -404,7 +404,7 @@ static int tcp_component_register(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &amp;mca_oob_tcp_component.disable_ipv6_family);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if !OPAL_HAVE_MAC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mca_oob_tcp_component.keepalive_time = 10;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      (void)mca_base_component_var_register(component, &quot;keepalive_time&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                            &quot;Idle time in seconds before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; starting to send keepalives (num &lt;= 0 ----&gt; disable keepalive)&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -427,7 +427,8 @@ static int tcp_component_register(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                            OPAL_INFO_LVL_9,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                            MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &amp;mca_oob_tcp_component.keepalive_probes);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mca_oob_tcp_component.retry_delay = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      (void)mca_base_component_var_register(component, &quot;retry_delay&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                            &quot;Time (in sec) to wait before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trying to connect to peer again&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Summary of changes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  config/opal_check_os_flavors.m4      | 6 ++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte/mca/oob/tcp/oob_tcp_common.c    | 5 +++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte/mca/oob/tcp/oob_tcp_component.c | 5 +++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  3 files changed, 12 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hooks/post-receive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open-mpi/ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi-commits mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
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
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17401.php">http://www.open-mpi.org/community/lists/devel/2015/05/17401.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17402.php">http://www.open-mpi.org/community/lists/devel/2015/05/17402.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17403/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17404.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Previous message:</strong> <a href="17402.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>In reply to:</strong> <a href="17402.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17404.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Reply:</strong> <a href="17404.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
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
