<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 08:18:38 2013" -->
<!-- isoreceived="20131114131838" -->
<!-- sent="Thu, 14 Nov 2013 13:14:10 +0000" -->
<!-- isosent="20131114131410" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A37F6E5BD_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A5BC92E7-F667-4898-9FF3-1CC63F4570C3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 08:14:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13247.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13245.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703 - in trunk:	contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13245.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703 - in trunk:	contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13247.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13247.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Um, no. It's supposed to work with UDCM which doesn't appear to be enabled in 1.7.
<br>
<p>Per Ralph's comment to me last night:
<br>
<p>&quot;... you cannot use the oob connection manager. It doesn't work and was deprecated. You must use udcm, which is why things are supposed to be set to do so by default. Please check the openib connect priorities and correct them if necessary.&quot;
<br>
<p>However, it's never been enabled in 1.7 - don't know what &quot;borked&quot; means, and from what Devendar tells me, several UDCM commits that are in the trunk have not been pushed over to 1.7:
<br>
<p>So, as of this moment, OpenIB BTL is essentially dead-in-the-water in 1.7.
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[enable_connectx_xrc=&quot;$enableval&quot;], [enable_connectx_xrc=&quot;yes&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# Unconnect Datagram (UD) based connection manager
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#
<br>
#    AC_ARG_ENABLE([openib-udcm],
<br>
#        [AC_HELP_STRING([--enable-openib-udcm],
<br>
#                        [Enable datagram connection support in openib BTL (default: enabled)])], 
<br>
#                        [enable_openib_udcm=&quot;$enableval&quot;], [enable_openib_udcm=&quot;yes&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# Per discussion with Ralph and Nathan, disable UDCM for now.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# It's borked and needs some surgery to get back on its feet.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;enable_openib_udcm=no
<br>
<p><p>Josh
<br>
<p><p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Thursday, November 14, 2013 6:44 AM
<br>
To: &lt;devel_at_[hidden]&gt;
<br>
Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect
<br>
<p>Does the openib *only* work with RDMACM now?
<br>
<p>That's surprising (and bad!).
<br>
<p>Did someone ask Mellanox about fixing the OOB and XOOB CPCs?
<br>
<p><p>On Nov 13, 2013, at 11:16 PM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2013-11-13 23:16:53 EST (Wed, 13 Nov 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29703
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29703">https://svn.open-mpi.org/trac/ompi/changeset/29703</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Given that the oob and xoob cpc's are no longer operable and haven't been since the OOB update, remove them to avoid confusion
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cmr:v1.7.4:reviewer=hjelmn:subject=Remove stale cpcs from openib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Deleted:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.h
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/contrib/platform/iu/odin/optimized.conf               |     1                                         
</span><br>
<span class="quotelev1">&gt;   trunk/contrib/platform/iu/odin/static.conf                  |     1                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/Makefile.am                       |    10                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/connect/btl_openib_connect_base.c |    14                                         
</span><br>
<span class="quotelev1">&gt;   /dev/null                                                   |   975 ---------------------------------       
</span><br>
<span class="quotelev1">&gt;   /dev/null                                                   |    18                                         
</span><br>
<span class="quotelev1">&gt;   /dev/null                                                   |  1150 ----------------------------------------
</span><br>
<span class="quotelev1">&gt;   /dev/null                                                   |    19                                         
</span><br>
<span class="quotelev1">&gt;   8 files changed, 5 insertions(+), 2183 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/contrib/platform/iu/odin/optimized.conf
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/contrib/platform/iu/odin/optimized.conf	Wed Nov 13 19:34:15 2013	(r29702)
</span><br>
<span class="quotelev1">&gt; +++ trunk/contrib/platform/iu/odin/optimized.conf	2013-11-13 23:16:53 EST (Wed, 13 Nov 2013)	(r29703)
</span><br>
<span class="quotelev1">&gt; @@ -80,7 +80,6 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ## Setup OpenIB
</span><br>
<span class="quotelev1">&gt; btl_openib_want_fork_support = 0 
</span><br>
<span class="quotelev1">&gt; -btl_openib_cpc_include = oob 
</span><br>
<span class="quotelev1">&gt; #btl_openib_receive_queues = P,128,256,64,32,32:S,2048,1024,128,32:S,12288,1024,128,32:S,65536,1024,128,32 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ## Setup TCP
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/contrib/platform/iu/odin/static.conf
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/contrib/platform/iu/odin/static.conf	Wed Nov 13 19:34:15 2013	(r29702)
</span><br>
<span class="quotelev1">&gt; +++ trunk/contrib/platform/iu/odin/static.conf	2013-11-13 23:16:53 EST (Wed, 13 Nov 2013)	(r29703)
</span><br>
<span class="quotelev1">&gt; @@ -80,7 +80,6 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ## Setup OpenIB
</span><br>
<span class="quotelev1">&gt; btl_openib_want_fork_support = 0 
</span><br>
<span class="quotelev1">&gt; -btl_openib_cpc_include = oob 
</span><br>
<span class="quotelev1">&gt; #btl_openib_receive_queues = P,128,256,64,32,32:S,2048,1024,128,32:S,12288,1024,128,32:S,65536,1024,128,32 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ## Setup TCP
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/Makefile.am	Wed Nov 13 19:34:15 2013	(r29702)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/Makefile.am	2013-11-13 23:16:53 EST (Wed, 13 Nov 2013)	(r29703)
</span><br>
<span class="quotelev1">&gt; @@ -14,6 +14,7 @@
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2011      NVIDIA Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2011      Mellanox Technologies.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2012      Oak Ridge National Laboratory.  All rights reserved
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2013      Intel, Inc. All rights reserved.
</span><br>
<span class="quotelev1">&gt; # $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -60,8 +61,6 @@
</span><br>
<span class="quotelev1">&gt;     btl_openib_ip.c \
</span><br>
<span class="quotelev1">&gt;     connect/base.h \
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_base.c \
</span><br>
<span class="quotelev1">&gt; -    connect/btl_openib_connect_oob.c \
</span><br>
<span class="quotelev1">&gt; -    connect/btl_openib_connect_oob.h \
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_empty.c \
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_empty.h \
</span><br>
<span class="quotelev1">&gt;     connect/connect.h
</span><br>
<span class="quotelev1">&gt; @@ -73,13 +72,6 @@
</span><br>
<span class="quotelev1">&gt;     btl_openib_failover.h
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -# If we have XRC support, build that CPC
</span><br>
<span class="quotelev1">&gt; -if MCA_btl_openib_have_xrc
</span><br>
<span class="quotelev1">&gt; -sources += \
</span><br>
<span class="quotelev1">&gt; -    connect/btl_openib_connect_xoob.c \
</span><br>
<span class="quotelev1">&gt; -    connect/btl_openib_connect_xoob.h
</span><br>
<span class="quotelev1">&gt; -endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; # If we have rdmacm support, build that CPC
</span><br>
<span class="quotelev1">&gt; if MCA_btl_openib_have_rdmacm
</span><br>
<span class="quotelev1">&gt; sources += \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_base.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_base.c	Wed Nov 13 19:34:15 2013	(r29702)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_base.c	2013-11-13 23:16:53 EST (Wed, 13 Nov 2013)	(r29703)
</span><br>
<span class="quotelev1">&gt; @@ -17,11 +17,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_openib.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_openib_proc.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;connect/base.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;connect/btl_openib_connect_oob.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;connect/btl_openib_connect_empty.h&quot;
</span><br>
<span class="quotelev1">&gt; -#if HAVE_XRC
</span><br>
<span class="quotelev1">&gt; -#include &quot;connect/btl_openib_connect_xoob.h&quot;
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; #if OMPI_HAVE_RDMACM &amp;&amp; OPAL_HAVE_THREADS
</span><br>
<span class="quotelev1">&gt; #include &quot;connect/btl_openib_connect_rdmacm.h&quot;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; @@ -37,15 +33,13 @@
</span><br>
<span class="quotelev1">&gt;  * Array of all possible connection functions
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; static ompi_btl_openib_connect_base_component_t *all[] = {
</span><br>
<span class="quotelev1">&gt; -    &amp;ompi_btl_openib_connect_oob,
</span><br>
<span class="quotelev1">&gt; +    /* Always have an entry here so that the CP indexes will always be
</span><br>
<span class="quotelev1">&gt; +       the same: OOB has been removed, so use the &quot;empty&quot; CPC */
</span><br>
<span class="quotelev1">&gt; +    &amp;ompi_btl_openib_connect_empty,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Always have an entry here so that the CP indexes will always be
</span><br>
<span class="quotelev1">&gt; -       the same: if XRC is not available, use the &quot;empty&quot; CPC */
</span><br>
<span class="quotelev1">&gt; -#if HAVE_XRC
</span><br>
<span class="quotelev1">&gt; -    &amp;ompi_btl_openib_connect_xoob,
</span><br>
<span class="quotelev1">&gt; -#else
</span><br>
<span class="quotelev1">&gt; +       the same: XOOB has been removed, so use the &quot;empty&quot; CPC */
</span><br>
<span class="quotelev1">&gt;     &amp;ompi_btl_openib_connect_empty,
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Always have an entry here so that the CP indexes will always be
</span><br>
<span class="quotelev1">&gt;        the same: if RDMA CM is not available, use the &quot;empty&quot; CPC */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Deleted: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	2013-11-13 23:16:53 EST (Wed, 13 Nov 2013)	(r29702)
</span><br>
<span class="quotelev1">&gt; +++ /dev/null	00:00:00 1970	(deleted)
</span><br>
<span class="quotelev1">&gt; @@ -1,975 +0,0 @@
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt; - *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt; - *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2004-2011 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; - *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt; - *                         reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev1">&gt; - *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt; - *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2006-2013 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2006-2012 Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev1">&gt; - *                         reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2008-2013 Mellanox Technologies.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2009-2011 IBM Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2010      Oracle and/or its affiliates.  All rights reserved
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * $HEADER$
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#include &quot;opal/dss/dss.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;opal_stdint.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;opal/util/error.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;opal/util/show_help.h&quot;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#include &quot;ompi/mca/rte/rte.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;btl_openib.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;btl_openib_endpoint.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;btl_openib_proc.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; -#include &quot;connect/btl_openib_connect_sl.h&quot;
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev1">&gt; -#include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -typedef enum {
</span><br>
<span class="quotelev1">&gt; -    ENDPOINT_CONNECT_REQUEST,
</span><br>
<span class="quotelev1">&gt; -    ENDPOINT_CONNECT_RESPONSE,
</span><br>
<span class="quotelev1">&gt; -    ENDPOINT_CONNECT_ACK
</span><br>
<span class="quotelev1">&gt; -} connect_message_type_t;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static int oob_priority = 0;
</span><br>
<span class="quotelev1">&gt; -static bool rml_recv_posted = false;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static void oob_component_register(void);
</span><br>
<span class="quotelev1">&gt; -static int oob_component_query(mca_btl_openib_module_t *openib_btl,
</span><br>
<span class="quotelev1">&gt; -                               ompi_btl_openib_connect_base_module_t **cpc);
</span><br>
<span class="quotelev1">&gt; -static int oob_component_finalize(void);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static int oob_module_start_connect(ompi_btl_openib_connect_base_module_t *cpc,
</span><br>
<span class="quotelev1">&gt; -                                    mca_btl_base_endpoint_t *endpoint);
</span><br>
<span class="quotelev1">&gt; -static int reply_start_connect(mca_btl_openib_endpoint_t *endpoint,
</span><br>
<span class="quotelev1">&gt; -                               mca_btl_openib_rem_info_t *rem_info);
</span><br>
<span class="quotelev1">&gt; -static int set_remote_info(mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt; -                           mca_btl_openib_rem_info_t* rem_info);
</span><br>
<span class="quotelev1">&gt; -static int qp_connect_all(mca_btl_base_endpoint_t* endpoint);
</span><br>
<span class="quotelev1">&gt; -static int qp_create_all(mca_btl_base_endpoint_t* endpoint);
</span><br>
<span class="quotelev1">&gt; -static int qp_create_one(mca_btl_base_endpoint_t* endpoint, int qp,
</span><br>
<span class="quotelev1">&gt; -        struct ibv_srq *srq, uint32_t max_recv_wr, uint32_t max_send_wr);
</span><br>
<span class="quotelev1">&gt; -static int send_connect_data(mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt; -                             uint8_t message_type);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static void rml_send_cb(int status, ompi_process_name_t* endpoint,
</span><br>
<span class="quotelev1">&gt; -                        opal_buffer_t* buffer, ompi_rml_tag_t tag,
</span><br>
<span class="quotelev1">&gt; -                        void* cbdata);
</span><br>
<span class="quotelev1">&gt; -static void rml_recv_cb(int status, ompi_process_name_t* process_name,
</span><br>
<span class="quotelev1">&gt; -                        opal_buffer_t* buffer, ompi_rml_tag_t tag,
</span><br>
<span class="quotelev1">&gt; -                        void* cbdata);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * The &quot;component&quot; struct -- the top-level function pointers for the
</span><br>
<span class="quotelev1">&gt; - * oob connection scheme.
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -ompi_btl_openib_connect_base_component_t ompi_btl_openib_connect_oob = {
</span><br>
<span class="quotelev1">&gt; -    &quot;oob&quot;,
</span><br>
<span class="quotelev1">&gt; -    /* Register */
</span><br>
<span class="quotelev1">&gt; -    oob_component_register,
</span><br>
<span class="quotelev1">&gt; -    /* Init */
</span><br>
<span class="quotelev1">&gt; -    NULL,
</span><br>
<span class="quotelev1">&gt; -    /* Query */
</span><br>
<span class="quotelev1">&gt; -    oob_component_query,
</span><br>
<span class="quotelev1">&gt; -    /* Finalize */
</span><br>
<span class="quotelev1">&gt; -    oob_component_finalize,
</span><br>
<span class="quotelev1">&gt; -};
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/* Open - this functions sets up any oob specific commandline params */
</span><br>
<span class="quotelev1">&gt; -static void oob_component_register(void)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    /* the priority is initialized in the declaration above */
</span><br>
<span class="quotelev1">&gt; -    (void) mca_base_component_var_register(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; -                                           &quot;connect_oob_priority&quot;,
</span><br>
<span class="quotelev1">&gt; -                                           &quot;The selection method priority for oob&quot;,
</span><br>
<span class="quotelev1">&gt; -                                           MCA_BASE_VAR_TYPE_INT, NULL, 0, 0,
</span><br>
<span class="quotelev1">&gt; -                                           OPAL_INFO_LVL_9,
</span><br>
<span class="quotelev1">&gt; -                                           MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt; -                                           &amp;oob_priority);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (oob_priority &gt; 100) {
</span><br>
<span class="quotelev1">&gt; -        oob_priority = 100;
</span><br>
<span class="quotelev1">&gt; -    } else if (oob_priority &lt; -1) {
</span><br>
<span class="quotelev1">&gt; -        oob_priority = -1;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Init function.  Post non-blocking RML receive to accept incoming
</span><br>
<span class="quotelev1">&gt; - * connection requests.
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static int oob_component_query(mca_btl_openib_module_t *btl,
</span><br>
<span class="quotelev1">&gt; -                               ompi_btl_openib_connect_base_module_t **cpc)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    /* If we have the transport_type member, check to ensure we're on
</span><br>
<span class="quotelev1">&gt; -       IB (this CPC will not work with iWarp).  If we do not have the
</span><br>
<span class="quotelev1">&gt; -       transport_type member, then we must be &lt; OFED v1.2, and
</span><br>
<span class="quotelev1">&gt; -       therefore we must be IB. */
</span><br>
<span class="quotelev1">&gt; -#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp; HAVE_DECL_IBV_LINK_LAYER_ETHERNET
</span><br>
<span class="quotelev1">&gt; -    if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev1">&gt; -        opal_output_verbose(5, ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; -                            &quot;openib BTL: oob CPC only supported on InfiniBand; skipped on  %s:%d&quot;,
</span><br>
<span class="quotelev1">&gt; -                            ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; -                            btl-&gt;port_num);
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (mca_btl_openib_component.num_xrc_qps &gt; 0) {
</span><br>
<span class="quotelev1">&gt; -        opal_output_verbose(5, ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; -                            &quot;openib BTL: oob CPC not supported with XRC receive queues, please try xoob CPC; skipped on %s:%d&quot;,
</span><br>
<span class="quotelev1">&gt; -                            ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; -                            btl-&gt;port_num);
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    /* If this btl supports OOB, then post the RML message.  But
</span><br>
<span class="quotelev1">&gt; -       ensure to only post it *once*, because another btl may have
</span><br>
<span class="quotelev1">&gt; -       come in before this and already posted it. */
</span><br>
<span class="quotelev1">&gt; -    if (!rml_recv_posted) {
</span><br>
<span class="quotelev1">&gt; -        ompi_rte_recv_buffer_nb(OMPI_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -                                OMPI_RML_TAG_OPENIB,
</span><br>
<span class="quotelev1">&gt; -                                OMPI_RML_PERSISTENT,
</span><br>
<span class="quotelev1">&gt; -                                rml_recv_cb,
</span><br>
<span class="quotelev1">&gt; -                                NULL);
</span><br>
<span class="quotelev1">&gt; -        rml_recv_posted = true;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    *cpc = (ompi_btl_openib_connect_base_module_t *) malloc(sizeof(ompi_btl_openib_connect_base_module_t));
</span><br>
<span class="quotelev1">&gt; -    if (NULL == *cpc) {
</span><br>
<span class="quotelev1">&gt; -        ompi_rte_recv_cancel(OMPI_NAME_WILDCARD, OMPI_RML_TAG_OPENIB);
</span><br>
<span class="quotelev1">&gt; -        rml_recv_posted = false;
</span><br>
<span class="quotelev1">&gt; -        opal_output_verbose(5, ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; -                            &quot;openib BTL: oob CPC system error (malloc failed)&quot;);
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (oob_priority &gt; 100) {
</span><br>
<span class="quotelev1">&gt; -        oob_priority = 100;
</span><br>
<span class="quotelev1">&gt; -    } else if (oob_priority &lt; -1) {
</span><br>
<span class="quotelev1">&gt; -        oob_priority = -1;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;data.cbm_component = &amp;ompi_btl_openib_connect_oob;
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;data.cbm_priority = oob_priority;
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;data.cbm_modex_message = NULL;
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;data.cbm_modex_message_len = 0;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;cbm_endpoint_init = NULL;
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;cbm_start_connect = oob_module_start_connect;
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;cbm_endpoint_finalize = NULL;
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;cbm_finalize = NULL;
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;cbm_uses_cts = false;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    opal_output_verbose(5, ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; -                        &quot;openib BTL: oob CPC available for use on %s:%d&quot;,
</span><br>
<span class="quotelev1">&gt; -                        ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; -                        btl-&gt;port_num);
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Connect function.  Start initiation of connections to a remote
</span><br>
<span class="quotelev1">&gt; - * peer.  We send our Queue Pair information over the RML/OOB
</span><br>
<span class="quotelev1">&gt; - * communication mechanism.  On completion of our send, a send
</span><br>
<span class="quotelev1">&gt; - * completion handler is called.
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static int oob_module_start_connect(ompi_btl_openib_connect_base_module_t *cpc,
</span><br>
<span class="quotelev1">&gt; -                                    mca_btl_base_endpoint_t *endpoint)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int rc;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (OMPI_SUCCESS != (rc = qp_create_all(endpoint))) {
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Send connection info over to remote endpoint */
</span><br>
<span class="quotelev1">&gt; -    endpoint-&gt;endpoint_state = MCA_BTL_IB_CONNECTING;
</span><br>
<span class="quotelev1">&gt; -    if (OMPI_SUCCESS !=
</span><br>
<span class="quotelev1">&gt; -        (rc = send_connect_data(endpoint, ENDPOINT_CONNECT_REQUEST))) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;error sending connect request, error code %d&quot;, rc));
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Component finalize function.  Cleanup RML non-blocking receive.
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static int oob_component_finalize(void)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    if (rml_recv_posted) {
</span><br>
<span class="quotelev1">&gt; -        ompi_rte_recv_cancel(OMPI_NAME_WILDCARD, OMPI_RML_TAG_OPENIB);
</span><br>
<span class="quotelev1">&gt; -        rml_recv_posted = false;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; -    btl_openib_connect_sl_finalize();
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/**************************************************************************/
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Reply to a `start - connect' message
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static int reply_start_connect(mca_btl_openib_endpoint_t *endpoint,
</span><br>
<span class="quotelev1">&gt; -                               mca_btl_openib_rem_info_t *rem_info)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int rc;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Initialized QPs, LID = %d&quot;,
</span><br>
<span class="quotelev1">&gt; -                 ((mca_btl_openib_module_t*)endpoint-&gt;endpoint_btl)-&gt;lid));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Create local QP's and post receive resources */
</span><br>
<span class="quotelev1">&gt; -    if (OMPI_SUCCESS != (rc = qp_create_all(endpoint))) {
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Set the remote side info */
</span><br>
<span class="quotelev1">&gt; -    set_remote_info(endpoint, rem_info);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Connect to remote endpoint qp's */
</span><br>
<span class="quotelev1">&gt; -    if (OMPI_SUCCESS != (rc = qp_connect_all(endpoint))) {
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Send connection info over to remote endpoint */
</span><br>
<span class="quotelev1">&gt; -    endpoint-&gt;endpoint_state = MCA_BTL_IB_CONNECT_ACK;
</span><br>
<span class="quotelev1">&gt; -    if (OMPI_SUCCESS !=
</span><br>
<span class="quotelev1">&gt; -        (rc = send_connect_data(endpoint, ENDPOINT_CONNECT_RESPONSE))) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;error in endpoint send connect request error code is %d&quot;,
</span><br>
<span class="quotelev1">&gt; -                   rc));
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static int set_remote_info(mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt; -                           mca_btl_openib_rem_info_t* rem_info)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    /* Free up the memory pointed to by rem_qps before overwriting the pointer
</span><br>
<span class="quotelev1">&gt; -       in the following memcpy */
</span><br>
<span class="quotelev1">&gt; -    free(endpoint-&gt;rem_info.rem_qps);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* copy the rem_info stuff */
</span><br>
<span class="quotelev1">&gt; -    memcpy(&amp;((mca_btl_openib_endpoint_t*) endpoint)-&gt;rem_info,
</span><br>
<span class="quotelev1">&gt; -           rem_info, sizeof(mca_btl_openib_rem_info_t));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Setting QP info,  LID = %d&quot;, endpoint-&gt;rem_info.rem_lid));
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Connect the local ends of all qp's to the remote side
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static int qp_connect_all(mca_btl_openib_endpoint_t *endpoint)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int i;
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_module_t* openib_btl =
</span><br>
<span class="quotelev1">&gt; -        (mca_btl_openib_module_t*)endpoint-&gt;endpoint_btl;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    for (i = 0; i &lt; mca_btl_openib_component.num_qps; i++) {
</span><br>
<span class="quotelev1">&gt; -        struct ibv_qp_attr attr;
</span><br>
<span class="quotelev1">&gt; -        struct ibv_qp* qp = endpoint-&gt;qps[i].qp-&gt;lcl_qp;
</span><br>
<span class="quotelev1">&gt; -        enum ibv_mtu mtu = (enum ibv_mtu) ((openib_btl-&gt;device-&gt;mtu &lt; endpoint-&gt;rem_info.rem_mtu) ?
</span><br>
<span class="quotelev1">&gt; -            openib_btl-&gt;device-&gt;mtu : endpoint-&gt;rem_info.rem_mtu) ;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        memset(&amp;attr, 0, sizeof(attr));
</span><br>
<span class="quotelev1">&gt; -        attr.qp_state           = IBV_QPS_RTR;
</span><br>
<span class="quotelev1">&gt; -        attr.path_mtu           = mtu;
</span><br>
<span class="quotelev1">&gt; -        attr.dest_qp_num        = endpoint-&gt;rem_info.rem_qps[i].rem_qp_num;
</span><br>
<span class="quotelev1">&gt; -        attr.rq_psn             = endpoint-&gt;rem_info.rem_qps[i].rem_psn;
</span><br>
<span class="quotelev1">&gt; -        attr.max_dest_rd_atomic = mca_btl_openib_component.ib_max_rdma_dst_ops;
</span><br>
<span class="quotelev1">&gt; -        attr.min_rnr_timer  = mca_btl_openib_component.ib_min_rnr_timer;
</span><br>
<span class="quotelev1">&gt; -        attr.ah_attr.is_global     = 0;
</span><br>
<span class="quotelev1">&gt; -        attr.ah_attr.dlid          = endpoint-&gt;rem_info.rem_lid;
</span><br>
<span class="quotelev1">&gt; -        attr.ah_attr.src_path_bits = openib_btl-&gt;src_path_bits;
</span><br>
<span class="quotelev1">&gt; -        attr.ah_attr.port_num      = openib_btl-&gt;port_num;
</span><br>
<span class="quotelev1">&gt; -        attr.ah_attr.sl            = mca_btl_openib_component.ib_service_level;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; -        /* if user enabled dynamic SL, get it from PathRecord */
</span><br>
<span class="quotelev1">&gt; -        if (0 != mca_btl_openib_component.ib_path_record_service_level) {
</span><br>
<span class="quotelev1">&gt; -            int rc = btl_openib_connect_get_pathrecord_sl(qp-&gt;context,
</span><br>
<span class="quotelev1">&gt; -                                                          attr.ah_attr.port_num,
</span><br>
<span class="quotelev1">&gt; -                                                          openib_btl-&gt;lid,
</span><br>
<span class="quotelev1">&gt; -                                                          attr.ah_attr.dlid);
</span><br>
<span class="quotelev1">&gt; -            if (OMPI_ERROR == rc) {
</span><br>
<span class="quotelev1">&gt; -                return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            attr.ah_attr.sl = rc;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        /* JMS to be filled in later dynamically */
</span><br>
<span class="quotelev1">&gt; -        attr.ah_attr.static_rate   = 0;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        if (mca_btl_openib_component.verbose) {
</span><br>
<span class="quotelev1">&gt; -            BTL_OUTPUT((&quot;Set MTU to IBV value %d (%s bytes)&quot;, mtu,
</span><br>
<span class="quotelev1">&gt; -                        (mtu == IBV_MTU_256) ? &quot;256&quot; :
</span><br>
<span class="quotelev1">&gt; -                        (mtu == IBV_MTU_512) ? &quot;512&quot; :
</span><br>
<span class="quotelev1">&gt; -                        (mtu == IBV_MTU_1024) ? &quot;1024&quot; :
</span><br>
<span class="quotelev1">&gt; -                        (mtu == IBV_MTU_2048) ? &quot;2048&quot; :
</span><br>
<span class="quotelev1">&gt; -                        (mtu == IBV_MTU_4096) ? &quot;4096&quot; :
</span><br>
<span class="quotelev1">&gt; -                        &quot;unknown (!)&quot;));
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        if (ibv_modify_qp(qp, &amp;attr,
</span><br>
<span class="quotelev1">&gt; -                          IBV_QP_STATE              |
</span><br>
<span class="quotelev1">&gt; -                          IBV_QP_AV                 |
</span><br>
<span class="quotelev1">&gt; -                          IBV_QP_PATH_MTU           |
</span><br>
<span class="quotelev1">&gt; -                          IBV_QP_DEST_QPN           |
</span><br>
<span class="quotelev1">&gt; -                          IBV_QP_RQ_PSN             |
</span><br>
<span class="quotelev1">&gt; -                          IBV_QP_MAX_DEST_RD_ATOMIC |
</span><br>
<span class="quotelev1">&gt; -                          IBV_QP_MIN_RNR_TIMER)) {
</span><br>
<span class="quotelev1">&gt; -            BTL_ERROR((&quot;error modifing QP to RTR errno says %s&quot;,
</span><br>
<span class="quotelev1">&gt; -                       strerror(errno)));
</span><br>
<span class="quotelev1">&gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        attr.qp_state       = IBV_QPS_RTS;
</span><br>
<span class="quotelev1">&gt; -        attr.timeout        = mca_btl_openib_component.ib_timeout;
</span><br>
<span class="quotelev1">&gt; -        attr.retry_cnt      = mca_btl_openib_component.ib_retry_count;
</span><br>
<span class="quotelev1">&gt; -        /* On PP QPs we have SW flow control, no need for rnr retries. Setting
</span><br>
<span class="quotelev1">&gt; -         * it to zero helps to catch bugs */
</span><br>
<span class="quotelev1">&gt; -        attr.rnr_retry      = BTL_OPENIB_QP_TYPE_PP(i) ? 0 :
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_component.ib_rnr_retry;
</span><br>
<span class="quotelev1">&gt; -        attr.sq_psn         = endpoint-&gt;qps[i].qp-&gt;lcl_psn;
</span><br>
<span class="quotelev1">&gt; -        attr.max_rd_atomic  = mca_btl_openib_component.ib_max_rdma_dst_ops;
</span><br>
<span class="quotelev1">&gt; -        if (ibv_modify_qp(qp, &amp;attr,
</span><br>
<span class="quotelev1">&gt; -                          IBV_QP_STATE              |
</span><br>
<span class="quotelev1">&gt; -                          IBV_QP_TIMEOUT            |
</span><br>
<span class="quotelev1">&gt; -                          IBV_QP_RETRY_CNT          |
</span><br>
<span class="quotelev1">&gt; -                          IBV_QP_RNR_RETRY          |
</span><br>
<span class="quotelev1">&gt; -                          IBV_QP_SQ_PSN             |
</span><br>
<span class="quotelev1">&gt; -                          IBV_QP_MAX_QP_RD_ATOMIC)) {
</span><br>
<span class="quotelev1">&gt; -            BTL_ERROR((&quot;error modifying QP to RTS errno says %s&quot;,
</span><br>
<span class="quotelev1">&gt; -                       strerror(errno)));
</span><br>
<span class="quotelev1">&gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static void permute_array(int *permuted_qps, int nqps)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int i;
</span><br>
<span class="quotelev1">&gt; -    int idx;
</span><br>
<span class="quotelev1">&gt; -    int tmp;
</span><br>
<span class="quotelev1">&gt; -    int control[nqps];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    for (i = 0; i &lt; nqps; i++) {
</span><br>
<span class="quotelev1">&gt; -        permuted_qps[i] = i;
</span><br>
<span class="quotelev1">&gt; -        control[i] = 0;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    for (i = 0; i &lt; nqps - 1; i++) {
</span><br>
<span class="quotelev1">&gt; -        idx = i + random() % (nqps - i);
</span><br>
<span class="quotelev1">&gt; -        tmp = permuted_qps[i];
</span><br>
<span class="quotelev1">&gt; -        permuted_qps[i] = permuted_qps[idx];
</span><br>
<span class="quotelev1">&gt; -        permuted_qps[idx] = tmp;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* verify that permutation is ok: */
</span><br>
<span class="quotelev1">&gt; -    for (i = 0; i &lt; nqps; i++) {
</span><br>
<span class="quotelev1">&gt; -        control[permuted_qps[i]] ++;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    for (i = 0; i &lt; nqps; i++) {
</span><br>
<span class="quotelev1">&gt; -        if (control[i] != 1) {
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;bad permutation detected: &quot;));
</span><br>
<span class="quotelev1">&gt; -            for (i = 0; i &lt; nqps; i++) BTL_VERBOSE((&quot;%d &quot;, permuted_qps[i]));
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;\n&quot;));
</span><br>
<span class="quotelev1">&gt; -            abort();
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Create the local side of all the qp's.  The remote sides will be
</span><br>
<span class="quotelev1">&gt; - * connected later.
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static int qp_create_all(mca_btl_base_endpoint_t* endpoint)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int qp, rc, pp_qp_num = 0;
</span><br>
<span class="quotelev1">&gt; -    int32_t rd_rsv_total = 0;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    int rand_qpns[mca_btl_openib_component.num_qps];
</span><br>
<span class="quotelev1">&gt; -    int i;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    permute_array(rand_qpns, mca_btl_openib_component.num_qps);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    for (qp = 0; qp &lt; mca_btl_openib_component.num_qps; ++qp)
</span><br>
<span class="quotelev1">&gt; -        if(BTL_OPENIB_QP_TYPE_PP(qp)) {
</span><br>
<span class="quotelev1">&gt; -            rd_rsv_total +=
</span><br>
<span class="quotelev1">&gt; -                mca_btl_openib_component.qp_infos[qp].u.pp_qp.rd_rsv;
</span><br>
<span class="quotelev1">&gt; -            pp_qp_num++;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* if there is no pp QPs we still need reserved WQE for eager rdma flow
</span><br>
<span class="quotelev1">&gt; -     * control */
</span><br>
<span class="quotelev1">&gt; -    if(0 == pp_qp_num &amp;&amp; true == endpoint-&gt;use_eager_rdma)
</span><br>
<span class="quotelev1">&gt; -        pp_qp_num = 1;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    for (i = 0; i &lt; mca_btl_openib_component.num_qps; ++i) {
</span><br>
<span class="quotelev1">&gt; -        struct ibv_srq *srq = NULL;
</span><br>
<span class="quotelev1">&gt; -        uint32_t max_recv_wr, max_send_wr;
</span><br>
<span class="quotelev1">&gt; -        int32_t rd_rsv, rd_num_credits;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        qp = rand_qpns[i];
</span><br>
<span class="quotelev1">&gt; -        /* QP used for SW flow control need some additional recourses */
</span><br>
<span class="quotelev1">&gt; -        if(qp == mca_btl_openib_component.credits_qp) {
</span><br>
<span class="quotelev1">&gt; -            rd_rsv = rd_rsv_total;
</span><br>
<span class="quotelev1">&gt; -            rd_num_credits = pp_qp_num;
</span><br>
<span class="quotelev1">&gt; -        } else {
</span><br>
<span class="quotelev1">&gt; -            rd_rsv = rd_num_credits = 0;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        if(BTL_OPENIB_QP_TYPE_PP(qp)) {
</span><br>
<span class="quotelev1">&gt; -            max_recv_wr = mca_btl_openib_component.qp_infos[qp].rd_num + rd_rsv;
</span><br>
<span class="quotelev1">&gt; -            max_send_wr = mca_btl_openib_component.qp_infos[qp].rd_num +
</span><br>
<span class="quotelev1">&gt; -                rd_num_credits;
</span><br>
<span class="quotelev1">&gt; -        } else {
</span><br>
<span class="quotelev1">&gt; -            srq = endpoint-&gt;endpoint_btl-&gt;qps[qp].u.srq_qp.srq;
</span><br>
<span class="quotelev1">&gt; -            /* no receives are posted to SRQ qp */
</span><br>
<span class="quotelev1">&gt; -            max_recv_wr = 0;
</span><br>
<span class="quotelev1">&gt; -            max_send_wr = mca_btl_openib_component.qp_infos[qp].u.srq_qp.sd_max
</span><br>
<span class="quotelev1">&gt; -                + rd_num_credits;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        rc = qp_create_one(endpoint, qp, srq, max_recv_wr, max_send_wr);
</span><br>
<span class="quotelev1">&gt; -        if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            return rc;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Now that all the qp's are created locally, post some receive
</span><br>
<span class="quotelev1">&gt; -       buffers, setup credits, etc. */
</span><br>
<span class="quotelev1">&gt; -    return mca_btl_openib_endpoint_post_recvs(endpoint);
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/* Returns max inlne size for qp #N */
</span><br>
<span class="quotelev1">&gt; -static uint32_t max_inline_size(int qp, mca_btl_openib_device_t *device)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    if (mca_btl_openib_component.qp_infos[qp].size &lt;= device-&gt;max_inline_data) {
</span><br>
<span class="quotelev1">&gt; -        /* If qp message size is smaller than max_inline_data,
</span><br>
<span class="quotelev1">&gt; -         * we should enable inline messages */
</span><br>
<span class="quotelev1">&gt; -        return mca_btl_openib_component.qp_infos[qp].size;
</span><br>
<span class="quotelev1">&gt; -    } else if (mca_btl_openib_component.rdma_qp == qp || 0 == qp) {
</span><br>
<span class="quotelev1">&gt; -        /* If qp message size is bigger that max_inline_data, we
</span><br>
<span class="quotelev1">&gt; -         * should enable inline messages only for RDMA QP (for PUT/GET
</span><br>
<span class="quotelev1">&gt; -         * fin messages) and for the first qp */
</span><br>
<span class="quotelev1">&gt; -        return device-&gt;max_inline_data;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    /* Otherway it is no reason for inline */
</span><br>
<span class="quotelev1">&gt; -    return 0;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Create the local side of one qp.  The remote side will be connected
</span><br>
<span class="quotelev1">&gt; - * later.
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static int qp_create_one(mca_btl_base_endpoint_t* endpoint, int qp,
</span><br>
<span class="quotelev1">&gt; -        struct ibv_srq *srq, uint32_t max_recv_wr, uint32_t max_send_wr)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_module_t *openib_btl = endpoint-&gt;endpoint_btl;
</span><br>
<span class="quotelev1">&gt; -    struct ibv_qp *my_qp;
</span><br>
<span class="quotelev1">&gt; -    struct ibv_qp_init_attr init_attr;
</span><br>
<span class="quotelev1">&gt; -    struct ibv_qp_attr attr;
</span><br>
<span class="quotelev1">&gt; -    size_t req_inline;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    memset(&amp;init_attr, 0, sizeof(init_attr));
</span><br>
<span class="quotelev1">&gt; -    memset(&amp;attr, 0, sizeof(attr));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    init_attr.qp_type = IBV_QPT_RC;
</span><br>
<span class="quotelev1">&gt; -    init_attr.send_cq = openib_btl-&gt;device-&gt;ib_cq[BTL_OPENIB_RDMA_QP(qp) ? BTL_OPENIB_HP_CQ: BTL_OPENIB_LP_CQ];
</span><br>
<span class="quotelev1">&gt; -    init_attr.recv_cq = openib_btl-&gt;device-&gt;ib_cq[qp_cq_prio(qp)];
</span><br>
<span class="quotelev1">&gt; -    init_attr.srq     = srq;
</span><br>
<span class="quotelev1">&gt; -    init_attr.cap.max_inline_data = req_inline =
</span><br>
<span class="quotelev1">&gt; -        max_inline_size(qp, openib_btl-&gt;device);
</span><br>
<span class="quotelev1">&gt; -    init_attr.cap.max_send_sge = 1;
</span><br>
<span class="quotelev1">&gt; -    init_attr.cap.max_recv_sge = 1; /* we do not use SG list */
</span><br>
<span class="quotelev1">&gt; -    if(BTL_OPENIB_QP_TYPE_PP(qp)) {
</span><br>
<span class="quotelev1">&gt; -        init_attr.cap.max_recv_wr  = max_recv_wr;
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; -        init_attr.cap.max_recv_wr  = 0;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    init_attr.cap.max_send_wr  = max_send_wr;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    my_qp = ibv_create_qp(openib_btl-&gt;device-&gt;ib_pd, &amp;init_attr);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (NULL == my_qp) {
</span><br>
<span class="quotelev1">&gt; -        opal_show_help(&quot;help-mpi-btl-openib-cpc-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt; -                       &quot;ibv_create_qp failed&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       ompi_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; -                       ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; -                       &quot;Reliable connected (RC)&quot;);
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    endpoint-&gt;qps[qp].qp-&gt;lcl_qp = my_qp;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (init_attr.cap.max_inline_data &lt; req_inline) {
</span><br>
<span class="quotelev1">&gt; -        endpoint-&gt;qps[qp].ib_inline_max = init_attr.cap.max_inline_data;
</span><br>
<span class="quotelev1">&gt; -        opal_show_help(&quot;help-mpi-btl-openib-cpc-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt; -                       &quot;inline truncated&quot;, true, ompi_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; -                       ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; -                       openib_btl-&gt;port_num,
</span><br>
<span class="quotelev1">&gt; -                       req_inline, init_attr.cap.max_inline_data);
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; -        endpoint-&gt;qps[qp].ib_inline_max = req_inline;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    attr.qp_state        = IBV_QPS_INIT;
</span><br>
<span class="quotelev1">&gt; -    attr.pkey_index      = openib_btl-&gt;pkey_index;
</span><br>
<span class="quotelev1">&gt; -    attr.port_num        = openib_btl-&gt;port_num;
</span><br>
<span class="quotelev1">&gt; -    attr.qp_access_flags = IBV_ACCESS_REMOTE_WRITE | IBV_ACCESS_REMOTE_READ;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (ibv_modify_qp(endpoint-&gt;qps[qp].qp-&gt;lcl_qp,
</span><br>
<span class="quotelev1">&gt; -                      &amp;attr,
</span><br>
<span class="quotelev1">&gt; -                      IBV_QP_STATE |
</span><br>
<span class="quotelev1">&gt; -                      IBV_QP_PKEY_INDEX |
</span><br>
<span class="quotelev1">&gt; -                      IBV_QP_PORT |
</span><br>
<span class="quotelev1">&gt; -                      IBV_QP_ACCESS_FLAGS )) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;error modifying qp to INIT errno says %s&quot;, strerror(errno)));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Setup meta data on the endpoint */
</span><br>
<span class="quotelev1">&gt; -    endpoint-&gt;qps[qp].qp-&gt;lcl_psn = lrand48() &amp; 0xffffff;
</span><br>
<span class="quotelev1">&gt; -    endpoint-&gt;qps[qp].credit_frag = NULL;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * RML send connect information to remote endpoint
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static int send_connect_data(mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt; -                             uint8_t message_type)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    opal_buffer_t* buffer = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt; -    int rc;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (NULL == buffer) {
</span><br>
<span class="quotelev1">&gt; -         OMPI_ERROR_LOG(OMPI_ERR_OUT_OF_RESOURCE);
</span><br>
<span class="quotelev1">&gt; -         return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* pack the info in the send buffer */
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT8));
</span><br>
<span class="quotelev1">&gt; -    rc = opal_dss.pack(buffer, &amp;message_type, 1, OPAL_UINT8);
</span><br>
<span class="quotelev1">&gt; -    if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -        OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT64));
</span><br>
<span class="quotelev1">&gt; -    rc = opal_dss.pack(buffer, &amp;endpoint-&gt;subnet_id, 1, OPAL_UINT64);
</span><br>
<span class="quotelev1">&gt; -    if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -        OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (message_type != ENDPOINT_CONNECT_REQUEST) {
</span><br>
<span class="quotelev1">&gt; -        /* send the QP connect request info we respond to */
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.pack(buffer,
</span><br>
<span class="quotelev1">&gt; -                           &amp;endpoint-&gt;rem_info.rem_qps[0].rem_qp_num, 1,
</span><br>
<span class="quotelev1">&gt; -                           OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return rc;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT16));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.pack(buffer, &amp;endpoint-&gt;rem_info.rem_lid, 1, OPAL_UINT16);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return rc;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (message_type != ENDPOINT_CONNECT_ACK) {
</span><br>
<span class="quotelev1">&gt; -        int qp;
</span><br>
<span class="quotelev1">&gt; -        /* stuff all the QP info into the buffer */
</span><br>
<span class="quotelev1">&gt; -        for (qp = 0; qp &lt; mca_btl_openib_component.num_qps; qp++) {
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -            rc = opal_dss.pack(buffer, &amp;endpoint-&gt;qps[qp].qp-&gt;lcl_qp-&gt;qp_num,
</span><br>
<span class="quotelev1">&gt; -                               1, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -            if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -                OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -                return rc;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -            rc = opal_dss.pack(buffer, &amp;endpoint-&gt;qps[qp].qp-&gt;lcl_psn, 1,
</span><br>
<span class="quotelev1">&gt; -                               OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -            if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -                OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -                return rc;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT16));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.pack(buffer, &amp;endpoint-&gt;endpoint_btl-&gt;lid, 1, OPAL_UINT16);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return rc;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.pack(buffer, &amp;endpoint-&gt;endpoint_btl-&gt;device-&gt;mtu, 1,
</span><br>
<span class="quotelev1">&gt; -                OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return rc;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.pack(buffer, &amp;endpoint-&gt;index, 1, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return rc;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* send to remote endpoint */
</span><br>
<span class="quotelev1">&gt; -    rc = ompi_rte_send_buffer_nb(&amp;endpoint-&gt;endpoint_proc-&gt;proc_ompi-&gt;proc_name,
</span><br>
<span class="quotelev1">&gt; -                                 buffer, OMPI_RML_TAG_OPENIB,
</span><br>
<span class="quotelev1">&gt; -                                 rml_send_cb, NULL);
</span><br>
<span class="quotelev1">&gt; -    if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -        OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Sent QP Info, LID = %d, SUBNET = %&quot; PRIx64 &quot;\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                 endpoint-&gt;endpoint_btl-&gt;lid,
</span><br>
<span class="quotelev1">&gt; -                 endpoint-&gt;subnet_id));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Callback when we have finished RML sending the connect data to a
</span><br>
<span class="quotelev1">&gt; - * remote peer
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static void rml_send_cb(int status, ompi_process_name_t* endpoint,
</span><br>
<span class="quotelev1">&gt; -                        opal_buffer_t* buffer, ompi_rml_tag_t tag,
</span><br>
<span class="quotelev1">&gt; -                        void* cbdata)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Non blocking RML recv callback.  Read incoming QP and other info,
</span><br>
<span class="quotelev1">&gt; - * and if this endpoint is trying to connect, reply with our QP info,
</span><br>
<span class="quotelev1">&gt; - * otherwise try to modify QP's and establish reliable connection
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static void rml_recv_cb(int status, ompi_process_name_t* process_name,
</span><br>
<span class="quotelev1">&gt; -                        opal_buffer_t* buffer, ompi_rml_tag_t tag,
</span><br>
<span class="quotelev1">&gt; -                        void* cbdata)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_proc_t *ib_proc;
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_endpoint_t *ib_endpoint = NULL;
</span><br>
<span class="quotelev1">&gt; -    int endpoint_state;
</span><br>
<span class="quotelev1">&gt; -    int rc;
</span><br>
<span class="quotelev1">&gt; -    uint32_t i, lcl_qp = 0;
</span><br>
<span class="quotelev1">&gt; -    uint16_t lcl_lid = 0;
</span><br>
<span class="quotelev1">&gt; -    int32_t cnt = 1;
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_rem_info_t rem_info;
</span><br>
<span class="quotelev1">&gt; -    uint8_t message_type;
</span><br>
<span class="quotelev1">&gt; -    bool master;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* We later memcpy this whole structure. Make sure
</span><br>
<span class="quotelev1">&gt; -       that all the parameters are initialized, especially
</span><br>
<span class="quotelev1">&gt; -       the pointers */
</span><br>
<span class="quotelev1">&gt; -    memset(&amp;rem_info,0, sizeof(rem_info));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -   /* start by unpacking data first so we know who is knocking at
</span><br>
<span class="quotelev1">&gt; -       our door */
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT8));
</span><br>
<span class="quotelev1">&gt; -    rc = opal_dss.unpack(buffer, &amp;message_type, &amp;cnt, OPAL_UINT8);
</span><br>
<span class="quotelev1">&gt; -    if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -        OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -        mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -        return;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT64));
</span><br>
<span class="quotelev1">&gt; -    rc = opal_dss.unpack(buffer, &amp;rem_info.rem_subnet_id, &amp;cnt, OPAL_UINT64);
</span><br>
<span class="quotelev1">&gt; -    if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -        OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -        mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -        return;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (ENDPOINT_CONNECT_REQUEST != message_type) {
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.unpack(buffer, &amp;lcl_qp, &amp;cnt, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -            return;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT16));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.unpack(buffer, &amp;lcl_lid, &amp;cnt, OPAL_UINT16);
</span><br>
<span class="quotelev1">&gt; -        if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -            return;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    if (ENDPOINT_CONNECT_ACK != message_type) {
</span><br>
<span class="quotelev1">&gt; -        int qp;
</span><br>
<span class="quotelev1">&gt; -        /* get ready for the data */
</span><br>
<span class="quotelev1">&gt; -        rem_info.rem_qps =
</span><br>
<span class="quotelev1">&gt; -            (mca_btl_openib_rem_qp_info_t*) malloc(sizeof(mca_btl_openib_rem_qp_info_t) *
</span><br>
<span class="quotelev1">&gt; -                                                   mca_btl_openib_component.num_qps);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        /* unpack all the qp info */
</span><br>
<span class="quotelev1">&gt; -        for (qp = 0; qp &lt; mca_btl_openib_component.num_qps; ++qp) {
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -            rc = opal_dss.unpack(buffer, &amp;rem_info.rem_qps[qp].rem_qp_num, &amp;cnt,
</span><br>
<span class="quotelev1">&gt; -                                 OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -            if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -                OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -                mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -                return;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -            rc = opal_dss.unpack(buffer, &amp;rem_info.rem_qps[qp].rem_psn, &amp;cnt,
</span><br>
<span class="quotelev1">&gt; -                                 OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -            if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -                OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -                mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -                return;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT16));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.unpack(buffer, &amp;rem_info.rem_lid, &amp;cnt, OPAL_UINT16);
</span><br>
<span class="quotelev1">&gt; -        if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -            return;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.unpack(buffer, &amp;rem_info.rem_mtu, &amp;cnt, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -            return;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.unpack(buffer, &amp;rem_info.rem_index, &amp;cnt, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -            return;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Received QP Info,  LID = %d, SUBNET = %&quot; PRIx64 &quot;\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                 rem_info.rem_lid,
</span><br>
<span class="quotelev1">&gt; -                 rem_info.rem_subnet_id));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    master = ompi_rte_compare_name_fields(OMPI_RTE_CMP_ALL, OMPI_PROC_MY_NAME,
</span><br>
<span class="quotelev1">&gt; -                                    process_name) &gt; 0 ? true : false;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Need to protect the ib_procs list */
</span><br>
<span class="quotelev1">&gt; -    OPAL_THREAD_LOCK(&amp;mca_btl_openib_component.ib_lock);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    for (ib_proc = (mca_btl_openib_proc_t*)
</span><br>
<span class="quotelev1">&gt; -            opal_list_get_first(&amp;mca_btl_openib_component.ib_procs);
</span><br>
<span class="quotelev1">&gt; -        ib_proc != (mca_btl_openib_proc_t*)
</span><br>
<span class="quotelev1">&gt; -            opal_list_get_end(&amp;mca_btl_openib_component.ib_procs);
</span><br>
<span class="quotelev1">&gt; -        ib_proc  = (mca_btl_openib_proc_t*)opal_list_get_next(ib_proc)) {
</span><br>
<span class="quotelev1">&gt; -        bool found = false;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_EQUAL != ompi_rte_compare_name_fields(OMPI_RTE_CMP_ALL,
</span><br>
<span class="quotelev1">&gt; -                                   &amp;ib_proc-&gt;proc_ompi-&gt;proc_name, process_name)) {
</span><br>
<span class="quotelev1">&gt; -            continue;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        if (ENDPOINT_CONNECT_REQUEST != message_type) {
</span><br>
<span class="quotelev1">&gt; -            /* This is a reply message. Try to get the endpoint
</span><br>
<span class="quotelev1">&gt; -               instance the reply belongs to */
</span><br>
<span class="quotelev1">&gt; -            for (i = 0; i &lt; ib_proc-&gt;proc_endpoint_count; i++) {
</span><br>
<span class="quotelev1">&gt; -                ib_endpoint = ib_proc-&gt;proc_endpoints[i];
</span><br>
<span class="quotelev1">&gt; -                if (ib_endpoint-&gt;qps[0].qp-&gt;lcl_qp != NULL &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                    lcl_lid == ib_endpoint-&gt;endpoint_btl-&gt;lid &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                    lcl_qp == ib_endpoint-&gt;qps[0].qp-&gt;lcl_qp-&gt;qp_num &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                    rem_info.rem_subnet_id == ib_endpoint-&gt;subnet_id) {
</span><br>
<span class="quotelev1">&gt; -                    found = true;
</span><br>
<span class="quotelev1">&gt; -                    break;
</span><br>
<span class="quotelev1">&gt; -                }
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -        } else {
</span><br>
<span class="quotelev1">&gt; -            /* This is new connection request. If this is master try
</span><br>
<span class="quotelev1">&gt; -               to find endpoint in a connecting state. If this is
</span><br>
<span class="quotelev1">&gt; -               slave try to find  endpoint in closed state and
</span><br>
<span class="quotelev1">&gt; -               initiate connection back */
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_endpoint_t *ib_endpoint_found = NULL;
</span><br>
<span class="quotelev1">&gt; -            int master_first_closed = -1;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -            for (i = 0; i &lt; ib_proc-&gt;proc_endpoint_count; i++) {
</span><br>
<span class="quotelev1">&gt; -                ib_endpoint = ib_proc-&gt;proc_endpoints[i];
</span><br>
<span class="quotelev1">&gt; -                if (ib_endpoint-&gt;subnet_id != rem_info.rem_subnet_id ||
</span><br>
<span class="quotelev1">&gt; -                   (ib_endpoint-&gt;endpoint_state != MCA_BTL_IB_CONNECTING
</span><br>
<span class="quotelev1">&gt; -                    &amp;&amp; ib_endpoint-&gt;endpoint_state != MCA_BTL_IB_CLOSED))
</span><br>
<span class="quotelev1">&gt; -                    continue;
</span><br>
<span class="quotelev1">&gt; -                found = true;
</span><br>
<span class="quotelev1">&gt; -                ib_endpoint_found = ib_endpoint;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -                if (master &amp;&amp; -1 == master_first_closed &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                    MCA_BTL_IB_CLOSED == ib_endpoint-&gt;endpoint_state ) {
</span><br>
<span class="quotelev1">&gt; -                    /* capture in case no endpoint in connecting state */
</span><br>
<span class="quotelev1">&gt; -                    master_first_closed = i;
</span><br>
<span class="quotelev1">&gt; -                }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -                if ((master &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                     MCA_BTL_IB_CONNECTING == ib_endpoint-&gt;endpoint_state) ||
</span><br>
<span class="quotelev1">&gt; -                    (!master &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                     MCA_BTL_IB_CLOSED == ib_endpoint-&gt;endpoint_state))
</span><br>
<span class="quotelev1">&gt; -                    break; /* Found one. No point to continue */
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            ib_endpoint = ib_endpoint_found;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -            if (found &amp;&amp; master &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                MCA_BTL_IB_CLOSED == ib_endpoint-&gt;endpoint_state ) {
</span><br>
<span class="quotelev1">&gt; -                /* since this is master and no endpoints found in
</span><br>
<span class="quotelev1">&gt; -                 * connecting state use the first endpoint found
</span><br>
<span class="quotelev1">&gt; -                 * in closed state */
</span><br>
<span class="quotelev1">&gt; -                ib_endpoint = ib_proc-&gt;proc_endpoints[master_first_closed];
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -            /* if this is slave and there is no endpoints in closed
</span><br>
<span class="quotelev1">&gt; -               state then all connection are already in progress so
</span><br>
<span class="quotelev1">&gt; -               just ignore this connection request */
</span><br>
<span class="quotelev1">&gt; -            if (found &amp;&amp; !master &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                MCA_BTL_IB_CLOSED != ib_endpoint-&gt;endpoint_state) {
</span><br>
<span class="quotelev1">&gt; -                OPAL_THREAD_UNLOCK(&amp;mca_btl_openib_component.ib_lock);
</span><br>
<span class="quotelev1">&gt; -                return;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        if (!found) {
</span><br>
<span class="quotelev1">&gt; -            BTL_ERROR((&quot;can't find suitable endpoint for this peer\n&quot;));
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_UNLOCK(&amp;mca_btl_openib_component.ib_lock);
</span><br>
<span class="quotelev1">&gt; -            return;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        OPAL_THREAD_LOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -        endpoint_state = ib_endpoint-&gt;endpoint_state;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        /* Update status */
</span><br>
<span class="quotelev1">&gt; -        switch (endpoint_state) {
</span><br>
<span class="quotelev1">&gt; -        case MCA_BTL_IB_CLOSED :
</span><br>
<span class="quotelev1">&gt; -            /* We had this connection closed before.  The endpoint is
</span><br>
<span class="quotelev1">&gt; -               trying to connect. Move the status of this connection
</span><br>
<span class="quotelev1">&gt; -               to CONNECTING, and then reply with our QP
</span><br>
<span class="quotelev1">&gt; -               information */
</span><br>
<span class="quotelev1">&gt; -            if (master) {
</span><br>
<span class="quotelev1">&gt; -                assert(rem_info.rem_qps != NULL);
</span><br>
<span class="quotelev1">&gt; -                rc = reply_start_connect(ib_endpoint, &amp;rem_info);
</span><br>
<span class="quotelev1">&gt; -            } else {
</span><br>
<span class="quotelev1">&gt; -                rc = oob_module_start_connect(ib_endpoint-&gt;endpoint_local_cpc,
</span><br>
<span class="quotelev1">&gt; -                                              ib_endpoint);
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -            if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;error in endpoint reply start connect&quot;));
</span><br>
<span class="quotelev1">&gt; -                mca_btl_openib_endpoint_invoke_error(ib_endpoint);
</span><br>
<span class="quotelev1">&gt; -                OPAL_THREAD_UNLOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -                break;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -            /* As long as we expect a message from the peer (in order
</span><br>
<span class="quotelev1">&gt; -               to setup the connection) let the event engine pool the
</span><br>
<span class="quotelev1">&gt; -               RML events. Note: we increment it once peer active
</span><br>
<span class="quotelev1">&gt; -               connection. */
</span><br>
<span class="quotelev1">&gt; -            opal_progress_event_users_increment();
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_UNLOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        case MCA_BTL_IB_CONNECTING :
</span><br>
<span class="quotelev1">&gt; -            assert(rem_info.rem_qps != NULL);
</span><br>
<span class="quotelev1">&gt; -            set_remote_info(ib_endpoint, &amp;rem_info);
</span><br>
<span class="quotelev1">&gt; -            if (OMPI_SUCCESS != (rc = qp_connect_all(ib_endpoint))) {
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;endpoint connect error: %d&quot;, rc));
</span><br>
<span class="quotelev1">&gt; -                mca_btl_openib_endpoint_invoke_error(ib_endpoint);
</span><br>
<span class="quotelev1">&gt; -                OPAL_THREAD_UNLOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -                break;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -            if (master) {
</span><br>
<span class="quotelev1">&gt; -                ib_endpoint-&gt;endpoint_state = MCA_BTL_IB_WAITING_ACK;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -                /* Send him an ACK */
</span><br>
<span class="quotelev1">&gt; -                send_connect_data(ib_endpoint, ENDPOINT_CONNECT_RESPONSE);
</span><br>
<span class="quotelev1">&gt; -                OPAL_THREAD_UNLOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -            } else {
</span><br>
<span class="quotelev1">&gt; -                send_connect_data(ib_endpoint, ENDPOINT_CONNECT_ACK);
</span><br>
<span class="quotelev1">&gt; -                /* Tell main BTL that we're done */
</span><br>
<span class="quotelev1">&gt; -                mca_btl_openib_endpoint_cpc_complete(ib_endpoint);
</span><br>
<span class="quotelev1">&gt; -                /* cpc complete unlock the endpoint */
</span><br>
<span class="quotelev1">&gt; -             }
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        case MCA_BTL_IB_WAITING_ACK:
</span><br>
<span class="quotelev1">&gt; -            /* Tell main BTL that we're done */
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_endpoint_cpc_complete(ib_endpoint);
</span><br>
<span class="quotelev1">&gt; -            /* cpc complete unlock the endpoint */
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        case MCA_BTL_IB_CONNECT_ACK:
</span><br>
<span class="quotelev1">&gt; -            send_connect_data(ib_endpoint, ENDPOINT_CONNECT_ACK);
</span><br>
<span class="quotelev1">&gt; -            /* Tell main BTL that we're done */
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_endpoint_cpc_complete(ib_endpoint);
</span><br>
<span class="quotelev1">&gt; -            /* cpc complete unlock the endpoint */
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        case MCA_BTL_IB_CONNECTED:
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_UNLOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        case MCA_BTL_IB_FAILED:
</span><br>
<span class="quotelev1">&gt; -            /* This connection has been put in the failed state
</span><br>
<span class="quotelev1">&gt; -             * so just ignore the connection message. */
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_UNLOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        default :
</span><br>
<span class="quotelev1">&gt; -            BTL_ERROR((&quot;Invalid endpoint state %d&quot;, endpoint_state));
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_endpoint_invoke_error(ib_endpoint);
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_UNLOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        break;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    OPAL_THREAD_UNLOCK(&amp;mca_btl_openib_component.ib_lock);
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Deleted: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.h	2013-11-13 23:16:53 EST (Wed, 13 Nov 2013)	(r29702)
</span><br>
<span class="quotelev1">&gt; +++ /dev/null	00:00:00 1970	(deleted)
</span><br>
<span class="quotelev1">&gt; @@ -1,18 +0,0 @@
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2007-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * $HEADER$
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#ifndef BTL_OPENIB_CONNECT_OOB_H
</span><br>
<span class="quotelev1">&gt; -#define BTL_OPENIB_CONNECT_OOB_H
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -extern ompi_btl_openib_connect_base_component_t ompi_btl_openib_connect_oob;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Deleted: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	2013-11-13 23:16:53 EST (Wed, 13 Nov 2013)	(r29702)
</span><br>
<span class="quotelev1">&gt; +++ /dev/null	00:00:00 1970	(deleted)
</span><br>
<span class="quotelev1">&gt; @@ -1,1150 +0,0 @@
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2007-2011 Mellanox Technologies.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2009-2013 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2009      IBM Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2010-2011 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; - *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt; - *                         reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2012      Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev1">&gt; - *                         reserved. 
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2013      NVIDIA Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * $HEADER$
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#include &quot;opal_stdint.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;opal/dss/dss.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;opal/util/error.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;opal/util/show_help.h&quot;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#include &quot;ompi/mca/rte/rte.h&quot;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#include &quot;btl_openib.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;btl_openib_endpoint.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;btl_openib_proc.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;btl_openib_xrc.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;btl_openib_async.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev1">&gt; -#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; -#include &quot;connect/btl_openib_connect_sl.h&quot;
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static void xoob_component_register(void);
</span><br>
<span class="quotelev1">&gt; -static int xoob_component_query(mca_btl_openib_module_t *openib_btl,
</span><br>
<span class="quotelev1">&gt; -                                ompi_btl_openib_connect_base_module_t **cpc);
</span><br>
<span class="quotelev1">&gt; -static int xoob_component_finalize(void);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static int xoob_module_start_connect(ompi_btl_openib_connect_base_module_t *cpc,
</span><br>
<span class="quotelev1">&gt; -                                     mca_btl_base_endpoint_t *endpoint);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * The &quot;component&quot; struct -- the top-level function pointers for the
</span><br>
<span class="quotelev1">&gt; - * xoob connection scheme.
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -ompi_btl_openib_connect_base_component_t ompi_btl_openib_connect_xoob = {
</span><br>
<span class="quotelev1">&gt; -    &quot;xoob&quot;,
</span><br>
<span class="quotelev1">&gt; -    /* Register */
</span><br>
<span class="quotelev1">&gt; -    xoob_component_register,
</span><br>
<span class="quotelev1">&gt; -    /* Init */
</span><br>
<span class="quotelev1">&gt; -    NULL,
</span><br>
<span class="quotelev1">&gt; -    /* Query */
</span><br>
<span class="quotelev1">&gt; -    xoob_component_query,
</span><br>
<span class="quotelev1">&gt; -    /* Finalize */
</span><br>
<span class="quotelev1">&gt; -    xoob_component_finalize,
</span><br>
<span class="quotelev1">&gt; -};
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -typedef enum {
</span><br>
<span class="quotelev1">&gt; -    ENDPOINT_XOOB_CONNECT_REQUEST,
</span><br>
<span class="quotelev1">&gt; -    ENDPOINT_XOOB_CONNECT_RESPONSE,
</span><br>
<span class="quotelev1">&gt; -    ENDPOINT_XOOB_CONNECT_XRC_REQUEST,
</span><br>
<span class="quotelev1">&gt; -    ENDPOINT_XOOB_CONNECT_XRC_RESPONSE,
</span><br>
<span class="quotelev1">&gt; -    ENDPOINT_XOOB_CONNECT_XRC_NR_RESPONSE /* The xrc recv qp already was destroyed */
</span><br>
<span class="quotelev1">&gt; -} connect_message_type_t;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static bool rml_recv_posted = false;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#define XOOB_SET_REMOTE_INFO(EP, INFO)                                    \
</span><br>
<span class="quotelev1">&gt; -do {                                                                      \
</span><br>
<span class="quotelev1">&gt; -    /* copy the rem_info stuff */                                         \
</span><br>
<span class="quotelev1">&gt; -    EP.rem_lid       = INFO.rem_lid;                                      \
</span><br>
<span class="quotelev1">&gt; -    EP.rem_subnet_id = INFO.rem_subnet_id;                                \
</span><br>
<span class="quotelev1">&gt; -    EP.rem_mtu       = INFO.rem_mtu;                                      \
</span><br>
<span class="quotelev1">&gt; -    EP.rem_index     = INFO.rem_index;                                    \
</span><br>
<span class="quotelev1">&gt; -    memcpy((void*)EP.rem_qps, (void*)INFO.rem_qps,                        \
</span><br>
<span class="quotelev1">&gt; -            sizeof(mca_btl_openib_rem_qp_info_t));                        \
</span><br>
<span class="quotelev1">&gt; -    /* copy the rem_info stuff */                                         \
</span><br>
<span class="quotelev1">&gt; -    memcpy((void*)EP.rem_srqs, (void*)INFO.rem_srqs,                      \
</span><br>
<span class="quotelev1">&gt; -            sizeof(mca_btl_openib_rem_srq_info_t) *                       \
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_component.num_xrc_qps);                        \
</span><br>
<span class="quotelev1">&gt; -} while (0)
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static int xoob_priority = 60;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Callback when we have finished RML sending the connect data to a
</span><br>
<span class="quotelev1">&gt; - * remote peer
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static void xoob_rml_send_cb(int status, ompi_process_name_t* endpoint,
</span><br>
<span class="quotelev1">&gt; -                        opal_buffer_t* buffer, ompi_rml_tag_t tag,
</span><br>
<span class="quotelev1">&gt; -                        void* cbdata)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/* Receive connect information to remote endpoint */
</span><br>
<span class="quotelev1">&gt; -static int xoob_receive_connect_data(mca_btl_openib_rem_info_t *info, uint16_t *lid,
</span><br>
<span class="quotelev1">&gt; -        uint8_t *message_type, opal_buffer_t* buffer)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int cnt = 1, rc, srq;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Recv standart header */
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT8));
</span><br>
<span class="quotelev1">&gt; -    rc = opal_dss.unpack(buffer, message_type, &amp;cnt, OPAL_UINT8);
</span><br>
<span class="quotelev1">&gt; -    if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -        OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Recv unpack Message type  = %d\n&quot;, *message_type));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT64));
</span><br>
<span class="quotelev1">&gt; -    rc = opal_dss.unpack(buffer, &amp;info-&gt;rem_subnet_id, &amp;cnt, OPAL_UINT64);
</span><br>
<span class="quotelev1">&gt; -    if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -        OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Recv unpack sid  = %&quot; PRIx64 &quot;\n&quot;, info-&gt;rem_subnet_id));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT16));
</span><br>
<span class="quotelev1">&gt; -    rc = opal_dss.unpack(buffer, &amp;info-&gt;rem_lid, &amp;cnt, OPAL_UINT16);
</span><br>
<span class="quotelev1">&gt; -    if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -        OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Recv unpack lid  = %d&quot;, info-&gt;rem_lid));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Till now we got the standart header, now we continue to recieve data for
</span><br>
<span class="quotelev1">&gt; -     * different packet types
</span><br>
<span class="quotelev1">&gt; -     */
</span><br>
<span class="quotelev1">&gt; -    if (ENDPOINT_XOOB_CONNECT_REQUEST == *message_type ||
</span><br>
<span class="quotelev1">&gt; -            ENDPOINT_XOOB_CONNECT_RESPONSE == *message_type) {
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.unpack(buffer, &amp;info-&gt;rem_qps-&gt;rem_qp_num, &amp;cnt,
</span><br>
<span class="quotelev1">&gt; -                OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;Recv unpack remote qp  = %x&quot;, info-&gt;rem_qps-&gt;rem_qp_num));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.unpack(buffer, &amp;info-&gt;rem_qps-&gt;rem_psn, &amp;cnt,
</span><br>
<span class="quotelev1">&gt; -                OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;Recv unpack remote psn = %d&quot;, info-&gt;rem_qps-&gt;rem_psn));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.unpack(buffer, &amp;info-&gt;rem_mtu, &amp;cnt, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;Recv unpack remote mtu = %d&quot;, info-&gt;rem_mtu));
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (ENDPOINT_XOOB_CONNECT_REQUEST == *message_type ||
</span><br>
<span class="quotelev1">&gt; -            ENDPOINT_XOOB_CONNECT_XRC_REQUEST == *message_type) {
</span><br>
<span class="quotelev1">&gt; -        /* unpack requested lid info */
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT16));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.unpack(buffer, lid, &amp;cnt, OPAL_UINT16);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;Recv unpack requested lid = %d&quot;, *lid));
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Unpack requested recv qp number */
</span><br>
<span class="quotelev1">&gt; -    if (ENDPOINT_XOOB_CONNECT_XRC_REQUEST == *message_type) {
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        /* In XRC request case we will use rem_qp_num as container for requested qp number */
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.unpack(buffer, &amp;info-&gt;rem_qps-&gt;rem_qp_num, &amp;cnt,
</span><br>
<span class="quotelev1">&gt; -                OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return rc;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;Recv unpack requested qp = %x&quot;, info-&gt;rem_qps-&gt;rem_qp_num));
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (ENDPOINT_XOOB_CONNECT_RESPONSE == *message_type ||
</span><br>
<span class="quotelev1">&gt; -            ENDPOINT_XOOB_CONNECT_XRC_RESPONSE == *message_type) {
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.unpack(buffer, &amp;info-&gt;rem_index, &amp;cnt, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;Recv unpack remote index = %d&quot;, info-&gt;rem_index));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        for (srq = 0; srq &lt; mca_btl_openib_component.num_xrc_qps; srq++) {
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -            rc = opal_dss.unpack(buffer, &amp;info-&gt;rem_srqs[srq].rem_srq_num, &amp;cnt, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -            if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -                OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -                return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;Recv unpack remote index srq num[%d]= %d&quot;, srq, info-&gt;rem_srqs[srq].rem_srq_num));
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * send connect information to remote endpoint
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static int xoob_send_connect_data(mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt; -        uint8_t message_type)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    opal_buffer_t* buffer = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt; -    int rc, srq;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (NULL == buffer) {
</span><br>
<span class="quotelev1">&gt; -        OMPI_ERROR_LOG(OMPI_ERR_OUT_OF_RESOURCE);
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Bulding standart header that we use in all messages:
</span><br>
<span class="quotelev1">&gt; -     * - Message type,
</span><br>
<span class="quotelev1">&gt; -     * - Our subnet id
</span><br>
<span class="quotelev1">&gt; -     * - Our LID
</span><br>
<span class="quotelev1">&gt; -     */
</span><br>
<span class="quotelev1">&gt; -    /* pack the info in the send buffer */
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Send pack Message type = %d&quot;, message_type));
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT8));
</span><br>
<span class="quotelev1">&gt; -    rc = opal_dss.pack(buffer, &amp;message_type, 1, OPAL_UINT8);
</span><br>
<span class="quotelev1">&gt; -    if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -        OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Send pack sid = %&quot; PRIx64 &quot;\n&quot;, endpoint-&gt;subnet_id));
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT64));
</span><br>
<span class="quotelev1">&gt; -    rc = opal_dss.pack(buffer, &amp;endpoint-&gt;subnet_id, 1, OPAL_UINT64);
</span><br>
<span class="quotelev1">&gt; -    if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -        OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Send pack lid = %d&quot;, endpoint-&gt;endpoint_btl-&gt;lid));
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT16));
</span><br>
<span class="quotelev1">&gt; -    rc = opal_dss.pack(buffer, &amp;endpoint-&gt;endpoint_btl-&gt;lid, 1, OPAL_UINT16);
</span><br>
<span class="quotelev1">&gt; -    if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -        OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Now we append to standart header additional information
</span><br>
<span class="quotelev1">&gt; -     * that is required for full (open qp,etc..) connect request and response:
</span><br>
<span class="quotelev1">&gt; -     * - qp_num of first qp
</span><br>
<span class="quotelev1">&gt; -     * - psn of first qp
</span><br>
<span class="quotelev1">&gt; -     * - MTU
</span><br>
<span class="quotelev1">&gt; -     */
</span><br>
<span class="quotelev1">&gt; -    if (ENDPOINT_XOOB_CONNECT_REQUEST == message_type ||
</span><br>
<span class="quotelev1">&gt; -            ENDPOINT_XOOB_CONNECT_RESPONSE == message_type) {
</span><br>
<span class="quotelev1">&gt; -        uint32_t psn, qp_num;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        if (ENDPOINT_XOOB_CONNECT_REQUEST == message_type) {
</span><br>
<span class="quotelev1">&gt; -            qp_num = endpoint-&gt;qps[0].qp-&gt;lcl_qp-&gt;qp_num;
</span><br>
<span class="quotelev1">&gt; -            psn = endpoint-&gt;qps[0].qp-&gt;lcl_psn;
</span><br>
<span class="quotelev1">&gt; -        } else {
</span><br>
<span class="quotelev1">&gt; -            qp_num = endpoint-&gt;xrc_recv_qp_num;
</span><br>
<span class="quotelev1">&gt; -            psn = endpoint-&gt;xrc_recv_psn;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        /* stuff all the QP info into the buffer */
</span><br>
<span class="quotelev1">&gt; -        /* we need to send only one QP */
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;Send pack qp num = %x&quot;, qp_num));
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.pack(buffer, &amp;qp_num, 1, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return rc;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;Send pack lpsn = %d&quot;, psn));
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.pack(buffer, &amp;psn, 1, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return rc;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;Send pack mtu = %d&quot;, endpoint-&gt;endpoint_btl-&gt;device-&gt;mtu));
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.pack(buffer, &amp;endpoint-&gt;endpoint_btl-&gt;device-&gt;mtu, 1,
</span><br>
<span class="quotelev1">&gt; -                OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return rc;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* We append to header above additional information
</span><br>
<span class="quotelev1">&gt; -     * that is required for full &amp; XRC connect request:
</span><br>
<span class="quotelev1">&gt; -     * - The lid ob btl on remote site that we want to connect
</span><br>
<span class="quotelev1">&gt; -     */
</span><br>
<span class="quotelev1">&gt; -    if (ENDPOINT_XOOB_CONNECT_REQUEST == message_type ||
</span><br>
<span class="quotelev1">&gt; -            ENDPOINT_XOOB_CONNECT_XRC_REQUEST == message_type) {
</span><br>
<span class="quotelev1">&gt; -        /* when we are sending request we add remote lid that we want to connect */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;Send pack remote lid = %d&quot;, endpoint-&gt;ib_addr-&gt;lid));
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT16));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.pack(buffer, &amp;endpoint-&gt;ib_addr-&gt;lid, 1, OPAL_UINT16);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return rc;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* when we are sending xrc request we add remote
</span><br>
<span class="quotelev1">&gt; -     * recv qp number that we want to connect. */
</span><br>
<span class="quotelev1">&gt; -    if (ENDPOINT_XOOB_CONNECT_XRC_REQUEST == message_type) {
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;Send pack remote qp = %x&quot;, endpoint-&gt;ib_addr-&gt;remote_xrc_rcv_qp_num));
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.pack(buffer, &amp;endpoint-&gt;ib_addr-&gt;remote_xrc_rcv_qp_num,
</span><br>
<span class="quotelev1">&gt; -                1, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return rc;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    /* We append to header above additional information
</span><br>
<span class="quotelev1">&gt; -     * that is required for full &amp; XRC connect response:
</span><br>
<span class="quotelev1">&gt; -     * - index of our endpoint
</span><br>
<span class="quotelev1">&gt; -     * - array of xrc-srq numbers
</span><br>
<span class="quotelev1">&gt; -     */
</span><br>
<span class="quotelev1">&gt; -    if (ENDPOINT_XOOB_CONNECT_RESPONSE == message_type ||
</span><br>
<span class="quotelev1">&gt; -            ENDPOINT_XOOB_CONNECT_XRC_RESPONSE == message_type) {
</span><br>
<span class="quotelev1">&gt; -        /* we need to send the endpoint index for immidate send */
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;Send pack index = %d&quot;, endpoint-&gt;index));
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -        rc = opal_dss.pack(buffer, &amp;endpoint-&gt;index, 1, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -            OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            return rc;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        /* on response we add all SRQ numbers */
</span><br>
<span class="quotelev1">&gt; -        for (srq = 0; srq &lt; mca_btl_openib_component.num_xrc_qps; srq++) {
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;Send pack srq[%d] num  = %d&quot;, srq, endpoint-&gt;endpoint_btl-&gt;qps[srq].u.srq_qp.srq-&gt;xrc_srq_num));
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;packing %d of %d\n&quot;, 1, OPAL_UINT32));
</span><br>
<span class="quotelev1">&gt; -            rc = opal_dss.pack(buffer, &amp;endpoint-&gt;endpoint_btl-&gt;qps[srq].u.srq_qp.srq-&gt;xrc_srq_num,
</span><br>
<span class="quotelev1">&gt; -                    1, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; -            if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -                OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -                return rc;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* send to remote endpoint */
</span><br>
<span class="quotelev1">&gt; -    rc = ompi_rte_send_buffer_nb(&amp;endpoint-&gt;endpoint_proc-&gt;proc_ompi-&gt;proc_name,
</span><br>
<span class="quotelev1">&gt; -            buffer, OMPI_RML_TAG_XOPENIB,
</span><br>
<span class="quotelev1">&gt; -            xoob_rml_send_cb, NULL);
</span><br>
<span class="quotelev1">&gt; -    if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -        OMPI_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Send QP Info, LID = %d, SUBNET = %&quot; PRIx64 &quot;, Message type = %d&quot;,
</span><br>
<span class="quotelev1">&gt; -                endpoint-&gt;endpoint_btl-&gt;lid,
</span><br>
<span class="quotelev1">&gt; -                endpoint-&gt;subnet_id,
</span><br>
<span class="quotelev1">&gt; -                message_type));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/* Create XRC send qp */
</span><br>
<span class="quotelev1">&gt; -static int xoob_send_qp_create (mca_btl_base_endpoint_t* endpoint)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int prio = BTL_OPENIB_LP_CQ; /* all send completions go to low prio CQ */
</span><br>
<span class="quotelev1">&gt; -    uint32_t send_wr;
</span><br>
<span class="quotelev1">&gt; -    struct ibv_qp **qp;
</span><br>
<span class="quotelev1">&gt; -    uint32_t *psn;
</span><br>
<span class="quotelev1">&gt; -    struct ibv_qp_init_attr qp_init_attr;
</span><br>
<span class="quotelev1">&gt; -    struct ibv_qp_attr attr;
</span><br>
<span class="quotelev1">&gt; -    int ret;
</span><br>
<span class="quotelev1">&gt; -    size_t req_inline;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_module_t *openib_btl =
</span><br>
<span class="quotelev1">&gt; -        (mca_btl_openib_module_t*)endpoint-&gt;endpoint_btl;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Prepare QP structs */
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Creating Send QP\n&quot;));
</span><br>
<span class="quotelev1">&gt; -    qp = &amp;endpoint-&gt;qps[0].qp-&gt;lcl_qp;
</span><br>
<span class="quotelev1">&gt; -    psn = &amp;endpoint-&gt;qps[0].qp-&gt;lcl_psn;
</span><br>
<span class="quotelev1">&gt; -    /* reserve additional wr for eager rdma credit management */
</span><br>
<span class="quotelev1">&gt; -    send_wr = endpoint-&gt;ib_addr-&gt;qp-&gt;sd_wqe +
</span><br>
<span class="quotelev1">&gt; -        (mca_btl_openib_component.use_eager_rdma ?
</span><br>
<span class="quotelev1">&gt; -         mca_btl_openib_component.max_eager_rdma : 0);
</span><br>
<span class="quotelev1">&gt; -    memset(&amp;qp_init_attr, 0, sizeof(struct ibv_qp_init_attr));
</span><br>
<span class="quotelev1">&gt; -    memset(&amp;attr, 0, sizeof(struct ibv_qp_attr));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    qp_init_attr.send_cq = qp_init_attr.recv_cq = openib_btl-&gt;device-&gt;ib_cq[prio];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* no need recv queue; receives are posted to srq */
</span><br>
<span class="quotelev1">&gt; -    qp_init_attr.cap.max_recv_wr = 0;
</span><br>
<span class="quotelev1">&gt; -    qp_init_attr.cap.max_send_wr = send_wr;
</span><br>
<span class="quotelev1">&gt; -    qp_init_attr.cap.max_inline_data = req_inline =
</span><br>
<span class="quotelev1">&gt; -        openib_btl-&gt;device-&gt;max_inline_data;
</span><br>
<span class="quotelev1">&gt; -    qp_init_attr.cap.max_send_sge = 1;
</span><br>
<span class="quotelev1">&gt; -    /* this one is ignored by driver */
</span><br>
<span class="quotelev1">&gt; -    qp_init_attr.cap.max_recv_sge = 1; /* we do not use SG list */
</span><br>
<span class="quotelev1">&gt; -    qp_init_attr.qp_type = IBV_QPT_XRC;
</span><br>
<span class="quotelev1">&gt; -    qp_init_attr.xrc_domain = openib_btl-&gt;device-&gt;xrc_domain;
</span><br>
<span class="quotelev1">&gt; -    *qp = ibv_create_qp(openib_btl-&gt;device-&gt;ib_pd, &amp;qp_init_attr);
</span><br>
<span class="quotelev1">&gt; -    if (NULL == *qp) {
</span><br>
<span class="quotelev1">&gt; -	opal_show_help(&quot;help-mpi-btl-openib-cpc-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt; -		       &quot;ibv_create_qp failed&quot;, true,
</span><br>
<span class="quotelev1">&gt; -		       ompi_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; -		       ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; -		       &quot;Reliable connected (XRC)&quot;);
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (qp_init_attr.cap.max_inline_data &lt; req_inline) {
</span><br>
<span class="quotelev1">&gt; -        endpoint-&gt;qps[0].ib_inline_max = qp_init_attr.cap.max_inline_data;
</span><br>
<span class="quotelev1">&gt; -        opal_show_help(&quot;help-mpi-btl-openib-cpc-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt; -                       &quot;inline truncated&quot;, ompi_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; -                       ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; -                       openib_btl-&gt;port_num,
</span><br>
<span class="quotelev1">&gt; -                       req_inline, qp_init_attr.cap.max_inline_data);
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; -        endpoint-&gt;qps[0].ib_inline_max = req_inline;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    attr.qp_state = IBV_QPS_INIT;
</span><br>
<span class="quotelev1">&gt; -    attr.pkey_index = openib_btl-&gt;pkey_index;
</span><br>
<span class="quotelev1">&gt; -    attr.port_num = openib_btl-&gt;port_num;
</span><br>
<span class="quotelev1">&gt; -    attr.qp_access_flags = IBV_ACCESS_REMOTE_WRITE | IBV_ACCESS_REMOTE_READ;
</span><br>
<span class="quotelev1">&gt; -    ret = ibv_modify_qp(*qp, &amp;attr,
</span><br>
<span class="quotelev1">&gt; -                      IBV_QP_STATE |
</span><br>
<span class="quotelev1">&gt; -                      IBV_QP_PKEY_INDEX |
</span><br>
<span class="quotelev1">&gt; -                      IBV_QP_PORT |
</span><br>
<span class="quotelev1">&gt; -                      IBV_QP_ACCESS_FLAGS );
</span><br>
<span class="quotelev1">&gt; -    if (ret) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;Error modifying QP[%x] to IBV_QPS_INIT errno says: %s [%d]&quot;,
</span><br>
<span class="quotelev1">&gt; -                    (*qp)-&gt;qp_num, strerror(ret), ret));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Setup meta data on the endpoint */
</span><br>
<span class="quotelev1">&gt; -    *psn = lrand48() &amp; 0xffffff;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Now that all the qp's are created locally, post some receive
</span><br>
<span class="quotelev1">&gt; -       buffers, setup credits, etc. */
</span><br>
<span class="quotelev1">&gt; -    return mca_btl_openib_endpoint_post_recvs(endpoint);
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/* Send qp connect */
</span><br>
<span class="quotelev1">&gt; -static int xoob_send_qp_connect(mca_btl_openib_endpoint_t *endpoint, mca_btl_openib_rem_info_t *rem_info)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    struct ibv_qp* qp;
</span><br>
<span class="quotelev1">&gt; -    struct ibv_qp_attr attr;
</span><br>
<span class="quotelev1">&gt; -    uint32_t psn;
</span><br>
<span class="quotelev1">&gt; -    int ret;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_module_t* openib_btl =
</span><br>
<span class="quotelev1">&gt; -        (mca_btl_openib_module_t*)endpoint-&gt;endpoint_btl;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Connecting Send QP\n&quot;));
</span><br>
<span class="quotelev1">&gt; -    assert(NULL != endpoint-&gt;qps);
</span><br>
<span class="quotelev1">&gt; -    qp = endpoint-&gt;qps[0].qp-&gt;lcl_qp;
</span><br>
<span class="quotelev1">&gt; -    psn = endpoint-&gt;qps[0].qp-&gt;lcl_psn;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    memset(&amp;attr, 0, sizeof(attr));
</span><br>
<span class="quotelev1">&gt; -    attr.qp_state           = IBV_QPS_RTR;
</span><br>
<span class="quotelev1">&gt; -    attr.path_mtu = (openib_btl-&gt;device-&gt;mtu &lt; endpoint-&gt;rem_info.rem_mtu) ?
</span><br>
<span class="quotelev1">&gt; -        openib_btl-&gt;device-&gt;mtu : rem_info-&gt;rem_mtu;
</span><br>
<span class="quotelev1">&gt; -    attr.dest_qp_num        = rem_info-&gt;rem_qps-&gt;rem_qp_num;
</span><br>
<span class="quotelev1">&gt; -    attr.rq_psn             = rem_info-&gt;rem_qps-&gt;rem_psn;
</span><br>
<span class="quotelev1">&gt; -    attr.max_dest_rd_atomic = mca_btl_openib_component.ib_max_rdma_dst_ops;
</span><br>
<span class="quotelev1">&gt; -    attr.min_rnr_timer  = mca_btl_openib_component.ib_min_rnr_timer;
</span><br>
<span class="quotelev1">&gt; -    attr.ah_attr.is_global     = 0;
</span><br>
<span class="quotelev1">&gt; -    attr.ah_attr.dlid          = rem_info-&gt;rem_lid;
</span><br>
<span class="quotelev1">&gt; -    attr.ah_attr.src_path_bits = openib_btl-&gt;src_path_bits;
</span><br>
<span class="quotelev1">&gt; -    attr.ah_attr.port_num      = openib_btl-&gt;port_num;
</span><br>
<span class="quotelev1">&gt; -    attr.ah_attr.static_rate   = 0;
</span><br>
<span class="quotelev1">&gt; -    attr.ah_attr.sl            = mca_btl_openib_component.ib_service_level;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; -    /* if user enabled dynamic SL, get it from PathRecord */
</span><br>
<span class="quotelev1">&gt; -    if (0 != mca_btl_openib_component.ib_path_record_service_level) {
</span><br>
<span class="quotelev1">&gt; -        int rc = btl_openib_connect_get_pathrecord_sl(qp-&gt;context,
</span><br>
<span class="quotelev1">&gt; -                                                      attr.ah_attr.port_num,
</span><br>
<span class="quotelev1">&gt; -                                                      openib_btl-&gt;lid,
</span><br>
<span class="quotelev1">&gt; -                                                      attr.ah_attr.dlid);
</span><br>
<span class="quotelev1">&gt; -        if (OMPI_ERROR == rc) {
</span><br>
<span class="quotelev1">&gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        attr.ah_attr.sl = rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (mca_btl_openib_component.verbose) {
</span><br>
<span class="quotelev1">&gt; -        BTL_VERBOSE((&quot;Set MTU to IBV value %d (%s bytes)&quot;, attr.path_mtu,
</span><br>
<span class="quotelev1">&gt; -                    (attr.path_mtu == IBV_MTU_256) ? &quot;256&quot; :
</span><br>
<span class="quotelev1">&gt; -                    (attr.path_mtu == IBV_MTU_512) ? &quot;512&quot; :
</span><br>
<span class="quotelev1">&gt; -                    (attr.path_mtu == IBV_MTU_1024) ? &quot;1024&quot; :
</span><br>
<span class="quotelev1">&gt; -                    (attr.path_mtu == IBV_MTU_2048) ? &quot;2048&quot; :
</span><br>
<span class="quotelev1">&gt; -                    (attr.path_mtu == IBV_MTU_4096) ? &quot;4096&quot; :
</span><br>
<span class="quotelev1">&gt; -                    &quot;unknown (!)&quot;));
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    ret = ibv_modify_qp(qp, &amp;attr,
</span><br>
<span class="quotelev1">&gt; -                IBV_QP_STATE              |
</span><br>
<span class="quotelev1">&gt; -                IBV_QP_AV                 |
</span><br>
<span class="quotelev1">&gt; -                IBV_QP_PATH_MTU           |
</span><br>
<span class="quotelev1">&gt; -                IBV_QP_DEST_QPN           |
</span><br>
<span class="quotelev1">&gt; -                IBV_QP_RQ_PSN             |
</span><br>
<span class="quotelev1">&gt; -                IBV_QP_MAX_DEST_RD_ATOMIC |
</span><br>
<span class="quotelev1">&gt; -                IBV_QP_MIN_RNR_TIMER);
</span><br>
<span class="quotelev1">&gt; -    if (ret) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;Error modifying QP[%x] to IBV_QPS_RTR errno says: %s [%d]&quot;,
</span><br>
<span class="quotelev1">&gt; -                    qp-&gt;qp_num, strerror(ret), ret));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    attr.qp_state       = IBV_QPS_RTS;
</span><br>
<span class="quotelev1">&gt; -    attr.timeout        = mca_btl_openib_component.ib_timeout;
</span><br>
<span class="quotelev1">&gt; -    attr.retry_cnt      = mca_btl_openib_component.ib_retry_count;
</span><br>
<span class="quotelev1">&gt; -    attr.rnr_retry      = mca_btl_openib_component.ib_rnr_retry;
</span><br>
<span class="quotelev1">&gt; -    attr.sq_psn         = psn;
</span><br>
<span class="quotelev1">&gt; -    attr.max_rd_atomic  = mca_btl_openib_component.ib_max_rdma_dst_ops;
</span><br>
<span class="quotelev1">&gt; -    ret = ibv_modify_qp(qp, &amp;attr,
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_STATE              |
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_TIMEOUT            |
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_RETRY_CNT          |
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_RNR_RETRY          |
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_SQ_PSN             |
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_MAX_QP_RD_ATOMIC);
</span><br>
<span class="quotelev1">&gt; -    if (ret) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;Error modifying QP[%x] to IBV_QPS_RTS errno says: %s [%d]&quot;,
</span><br>
<span class="quotelev1">&gt; -                    qp-&gt;qp_num, strerror(ret), ret));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/* Recv qp create */
</span><br>
<span class="quotelev1">&gt; -static int xoob_recv_qp_create(mca_btl_openib_endpoint_t *endpoint, mca_btl_openib_rem_info_t *rem_info)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    struct ibv_qp_init_attr qp_init_attr;
</span><br>
<span class="quotelev1">&gt; -    struct ibv_qp_attr attr;
</span><br>
<span class="quotelev1">&gt; -    int ret;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_module_t* openib_btl =
</span><br>
<span class="quotelev1">&gt; -        (mca_btl_openib_module_t*)endpoint-&gt;endpoint_btl;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Connecting Recv QP\n&quot;));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    memset(&amp;qp_init_attr, 0, sizeof(struct ibv_qp_init_attr));
</span><br>
<span class="quotelev1">&gt; -    /* Only xrc_domain is required, all other are ignored */
</span><br>
<span class="quotelev1">&gt; -    qp_init_attr.xrc_domain = openib_btl-&gt;device-&gt;xrc_domain;
</span><br>
<span class="quotelev1">&gt; -    ret = ibv_create_xrc_rcv_qp(&amp;qp_init_attr, &amp;endpoint-&gt;xrc_recv_qp_num);
</span><br>
<span class="quotelev1">&gt; -    if (ret) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;Error creating XRC recv QP[%x], errno says: %s [%d]&quot;,
</span><br>
<span class="quotelev1">&gt; -                    endpoint-&gt;xrc_recv_qp_num, strerror(ret), ret));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    memset(&amp;attr, 0, sizeof(struct ibv_qp_attr));
</span><br>
<span class="quotelev1">&gt; -    attr.qp_state = IBV_QPS_INIT;
</span><br>
<span class="quotelev1">&gt; -    attr.pkey_index = openib_btl-&gt;pkey_index;
</span><br>
<span class="quotelev1">&gt; -    attr.port_num = openib_btl-&gt;port_num;
</span><br>
<span class="quotelev1">&gt; -    attr.qp_access_flags = IBV_ACCESS_REMOTE_WRITE | IBV_ACCESS_REMOTE_READ;
</span><br>
<span class="quotelev1">&gt; -    ret = ibv_modify_xrc_rcv_qp(openib_btl-&gt;device-&gt;xrc_domain,
</span><br>
<span class="quotelev1">&gt; -            endpoint-&gt;xrc_recv_qp_num,
</span><br>
<span class="quotelev1">&gt; -            &amp;attr,
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_STATE|
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_PKEY_INDEX|
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_PORT|
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_ACCESS_FLAGS);
</span><br>
<span class="quotelev1">&gt; -    if (ret) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;Error modifying XRC recv QP[%x] to IBV_QPS_INIT, errno says: %s [%d]&quot;,
</span><br>
<span class="quotelev1">&gt; -                     endpoint-&gt;xrc_recv_qp_num, strerror(ret), ret));
</span><br>
<span class="quotelev1">&gt; -        while(1);
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    memset(&amp;attr, 0, sizeof(struct ibv_qp_attr));
</span><br>
<span class="quotelev1">&gt; -    attr.qp_state           = IBV_QPS_RTR;
</span><br>
<span class="quotelev1">&gt; -    attr.path_mtu = (openib_btl-&gt;device-&gt;mtu &lt; endpoint-&gt;rem_info.rem_mtu) ?
</span><br>
<span class="quotelev1">&gt; -        openib_btl-&gt;device-&gt;mtu : rem_info-&gt;rem_mtu;
</span><br>
<span class="quotelev1">&gt; -    attr.dest_qp_num        = rem_info-&gt;rem_qps-&gt;rem_qp_num;
</span><br>
<span class="quotelev1">&gt; -    attr.rq_psn             = rem_info-&gt;rem_qps-&gt;rem_psn;
</span><br>
<span class="quotelev1">&gt; -    attr.max_dest_rd_atomic = mca_btl_openib_component.ib_max_rdma_dst_ops;
</span><br>
<span class="quotelev1">&gt; -    attr.min_rnr_timer  = mca_btl_openib_component.ib_min_rnr_timer;
</span><br>
<span class="quotelev1">&gt; -    attr.ah_attr.is_global     = 0;
</span><br>
<span class="quotelev1">&gt; -    attr.ah_attr.dlid          = rem_info-&gt;rem_lid;
</span><br>
<span class="quotelev1">&gt; -    attr.ah_attr.src_path_bits = openib_btl-&gt;src_path_bits;
</span><br>
<span class="quotelev1">&gt; -    attr.ah_attr.port_num      = openib_btl-&gt;port_num;
</span><br>
<span class="quotelev1">&gt; -    attr.ah_attr.static_rate   = 0;
</span><br>
<span class="quotelev1">&gt; -    attr.ah_attr.sl            = mca_btl_openib_component.ib_service_level;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; -    /* if user enabled dynamic SL, get it from PathRecord */
</span><br>
<span class="quotelev1">&gt; -    if (0 != mca_btl_openib_component.ib_path_record_service_level) {
</span><br>
<span class="quotelev1">&gt; -        int rc = btl_openib_connect_get_pathrecord_sl(
</span><br>
<span class="quotelev1">&gt; -                                openib_btl-&gt;device-&gt;xrc_domain-&gt;context,
</span><br>
<span class="quotelev1">&gt; -                                attr.ah_attr.port_num,
</span><br>
<span class="quotelev1">&gt; -                                openib_btl-&gt;lid,
</span><br>
<span class="quotelev1">&gt; -                                attr.ah_attr.dlid);
</span><br>
<span class="quotelev1">&gt; -        if (OMPI_ERROR == rc) {
</span><br>
<span class="quotelev1">&gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        attr.ah_attr.sl = rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    ret = ibv_modify_xrc_rcv_qp(openib_btl-&gt;device-&gt;xrc_domain,
</span><br>
<span class="quotelev1">&gt; -            endpoint-&gt;xrc_recv_qp_num,
</span><br>
<span class="quotelev1">&gt; -            &amp;attr,
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_STATE|
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_AV|
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_PATH_MTU|
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_DEST_QPN|
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_RQ_PSN|
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_MAX_DEST_RD_ATOMIC|
</span><br>
<span class="quotelev1">&gt; -            IBV_QP_MIN_RNR_TIMER);
</span><br>
<span class="quotelev1">&gt; -    if (ret) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;Error modifying XRC recv QP[%x] to IBV_QPS_RTR, errno says: %s [%d]&quot;,
</span><br>
<span class="quotelev1">&gt; -                    endpoint-&gt;xrc_recv_qp_num, strerror(ret), ret));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -#if OPAL_HAVE_THREADS
</span><br>
<span class="quotelev1">&gt; -    if (APM_ENABLED) {
</span><br>
<span class="quotelev1">&gt; -        mca_btl_openib_load_apm_xrc_rcv(endpoint-&gt;xrc_recv_qp_num, endpoint);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/* Recv qp connect */
</span><br>
<span class="quotelev1">&gt; -static int xoob_recv_qp_connect(mca_btl_openib_endpoint_t *endpoint, mca_btl_openib_rem_info_t *rem_info)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int ret;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_module_t* openib_btl =
</span><br>
<span class="quotelev1">&gt; -        (mca_btl_openib_module_t*)endpoint-&gt;endpoint_btl;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Connecting Recv QP\n&quot;));
</span><br>
<span class="quotelev1">&gt; -    ret = ibv_reg_xrc_rcv_qp(openib_btl-&gt;device-&gt;xrc_domain, rem_info-&gt;rem_qps-&gt;rem_qp_num);
</span><br>
<span class="quotelev1">&gt; -    if (ret) { /* failed to regester the qp, so it is already die and we should create new one */
</span><br>
<span class="quotelev1">&gt; -       /* Return NOT READY !!!*/
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;Failed to register qp_num: %d , get error: %s (%d)\n. Replying with RNR&quot;,
</span><br>
<span class="quotelev1">&gt; -                    rem_info-&gt;rem_qps-&gt;rem_qp_num, strerror(ret), ret));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; -        /* save the qp number for unregister */
</span><br>
<span class="quotelev1">&gt; -        endpoint-&gt;xrc_recv_qp_num = rem_info-&gt;rem_qps-&gt;rem_qp_num;
</span><br>
<span class="quotelev1">&gt; -        return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Reply to a `start - connect' message
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static int xoob_reply_first_connect(mca_btl_openib_endpoint_t *endpoint,
</span><br>
<span class="quotelev1">&gt; -                               mca_btl_openib_rem_info_t *rem_info)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int rc;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Initialized QPs, LID = %d&quot;,
</span><br>
<span class="quotelev1">&gt; -                 ((mca_btl_openib_module_t*)endpoint-&gt;endpoint_btl)-&gt;lid));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Create local QP's and post receive resources */
</span><br>
<span class="quotelev1">&gt; -    if (OMPI_SUCCESS != (rc = xoob_recv_qp_create(endpoint, rem_info))) {
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (OMPI_SUCCESS !=
</span><br>
<span class="quotelev1">&gt; -        (rc = xoob_send_connect_data(endpoint, ENDPOINT_XOOB_CONNECT_RESPONSE))) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;error in endpoint send connect request error code is %d&quot;,
</span><br>
<span class="quotelev1">&gt; -                   rc));
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/* Find endpoint for specific subnet/lid/message */
</span><br>
<span class="quotelev1">&gt; -static mca_btl_openib_endpoint_t* xoob_find_endpoint(ompi_process_name_t* process_name,
</span><br>
<span class="quotelev1">&gt; -        uint64_t subnet_id, uint16_t lid, uint8_t message_type)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    size_t i;
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_proc_t *ib_proc;
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_endpoint_t *ib_endpoint = NULL;
</span><br>
<span class="quotelev1">&gt; -    bool found = false;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Searching for ep and proc with follow parameters:&quot;
</span><br>
<span class="quotelev1">&gt; -                &quot;jobid %d, vpid %d, &quot;
</span><br>
<span class="quotelev1">&gt; -                &quot;sid %&quot; PRIx64 &quot;, lid %d&quot;,
</span><br>
<span class="quotelev1">&gt; -                process_name-&gt;jobid, process_name-&gt;vpid,
</span><br>
<span class="quotelev1">&gt; -                subnet_id, lid));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* find ibproc */
</span><br>
<span class="quotelev1">&gt; -    OPAL_THREAD_LOCK(&amp;mca_btl_openib_component.ib_lock);
</span><br>
<span class="quotelev1">&gt; -    for (ib_proc = (mca_btl_openib_proc_t*)
</span><br>
<span class="quotelev1">&gt; -            opal_list_get_first(&amp;mca_btl_openib_component.ib_procs);
</span><br>
<span class="quotelev1">&gt; -            ib_proc != (mca_btl_openib_proc_t*)
</span><br>
<span class="quotelev1">&gt; -            opal_list_get_end(&amp;mca_btl_openib_component.ib_procs);
</span><br>
<span class="quotelev1">&gt; -            ib_proc  = (mca_btl_openib_proc_t*)opal_list_get_next(ib_proc)) {
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_EQUAL == ompi_rte_compare_name_fields(OMPI_RTE_CMP_ALL,
</span><br>
<span class="quotelev1">&gt; -                    &amp;ib_proc-&gt;proc_ompi-&gt;proc_name, process_name)) {
</span><br>
<span class="quotelev1">&gt; -            found = true;
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    /* we found our ib_proc, lets find endpoint now */
</span><br>
<span class="quotelev1">&gt; -    if (found) {
</span><br>
<span class="quotelev1">&gt; -        for (i = 0; i &lt; ib_proc-&gt;proc_endpoint_count; i++) {
</span><br>
<span class="quotelev1">&gt; -            ib_endpoint = ib_proc-&gt;proc_endpoints[i];
</span><br>
<span class="quotelev1">&gt; -            /* we need to check different
</span><br>
<span class="quotelev1">&gt; -             * lid for different message type */
</span><br>
<span class="quotelev1">&gt; -            if (ENDPOINT_XOOB_CONNECT_RESPONSE == message_type ||
</span><br>
<span class="quotelev1">&gt; -                    ENDPOINT_XOOB_CONNECT_XRC_RESPONSE == message_type) {
</span><br>
<span class="quotelev1">&gt; -                /* response message */
</span><br>
<span class="quotelev1">&gt; -                if (ib_endpoint-&gt;subnet_id == subnet_id &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                        ib_endpoint-&gt;ib_addr-&gt;lid == lid) {
</span><br>
<span class="quotelev1">&gt; -                    break; /* Found one */
</span><br>
<span class="quotelev1">&gt; -                }
</span><br>
<span class="quotelev1">&gt; -            } else {
</span><br>
<span class="quotelev1">&gt; -                /* request message */
</span><br>
<span class="quotelev1">&gt; -                if (ib_endpoint-&gt;subnet_id == subnet_id &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                        ib_endpoint-&gt;endpoint_btl-&gt;lid == lid) {
</span><br>
<span class="quotelev1">&gt; -                    break; /* Found one */
</span><br>
<span class="quotelev1">&gt; -                }
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        if (NULL == ib_endpoint) {
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;can't find suitable endpoint for this peer\n&quot;));
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; -            BTL_ERROR((&quot;can't find suitable endpoint for this peer\n&quot;));
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    OPAL_THREAD_UNLOCK(&amp;mca_btl_openib_component.ib_lock);
</span><br>
<span class="quotelev1">&gt; -    return ib_endpoint;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/* In case if XRC recv qp was closed and sender still don't know about it
</span><br>
<span class="quotelev1">&gt; - * we need close the qp, reset the ib_adrr status to CLOSED and start everything
</span><br>
<span class="quotelev1">&gt; - * from scratch.
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static void xoob_restart_connect(mca_btl_base_endpoint_t *endpoint)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;Restarting the connection for the endpoint&quot;));
</span><br>
<span class="quotelev1">&gt; -    OPAL_THREAD_LOCK(&amp;endpoint-&gt;ib_addr-&gt;addr_lock);
</span><br>
<span class="quotelev1">&gt; -    switch (endpoint-&gt;ib_addr-&gt;status) {
</span><br>
<span class="quotelev1">&gt; -        case MCA_BTL_IB_ADDR_CONNECTED:
</span><br>
<span class="quotelev1">&gt; -            /* so we have the send qp, we just need the recive site.
</span><br>
<span class="quotelev1">&gt; -             * Send request for SRQ numbers */
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;Restart The IB addr: sid %&quot; PRIx64 &quot; lid %d&quot;
</span><br>
<span class="quotelev1">&gt; -                         &quot;in MCA_BTL_IB_ADDR_CONNECTED status,&quot;
</span><br>
<span class="quotelev1">&gt; -                         &quot; Changing to MCA_BTL_IB_ADDR_CLOSED and starting from scratch\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                         endpoint-&gt;ib_addr-&gt;subnet_id,endpoint-&gt;ib_addr-&gt;lid));
</span><br>
<span class="quotelev1">&gt; -            /* Switching back to closed and starting from scratch */
</span><br>
<span class="quotelev1">&gt; -            endpoint-&gt;ib_addr-&gt;status = MCA_BTL_IB_ADDR_CLOSED;
</span><br>
<span class="quotelev1">&gt; -            /* destroy the qp */
</span><br>
<span class="quotelev1">&gt; -            /* the reciver site was alredy closed so all pending list must be clean ! */
</span><br>
<span class="quotelev1">&gt; -            assert (opal_list_is_empty(&amp;endpoint-&gt;qps-&gt;no_wqe_pending_frags[0]));
</span><br>
<span class="quotelev1">&gt; -            assert (opal_list_is_empty(&amp;endpoint-&gt;qps-&gt;no_wqe_pending_frags[1]));
</span><br>
<span class="quotelev1">&gt; -            if(ibv_destroy_qp(endpoint-&gt;qps[0].qp-&gt;lcl_qp))
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;Failed to destroy QP&quot;));
</span><br>
<span class="quotelev1">&gt; -        case MCA_BTL_IB_ADDR_CLOSED:
</span><br>
<span class="quotelev1">&gt; -        case MCA_BTL_IB_ADDR_CONNECTING:
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;Restart The IB addr: sid %&quot; PRIx64 &quot; lid %d&quot;
</span><br>
<span class="quotelev1">&gt; -                         &quot;in MCA_BTL_IB_ADDR_CONNECTING or MCA_BTL_IB_ADDR_CLOSED status,&quot;
</span><br>
<span class="quotelev1">&gt; -                         &quot; starting from scratch\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                         endpoint-&gt;ib_addr-&gt;subnet_id,endpoint-&gt;ib_addr-&gt;lid));
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_UNLOCK(&amp;endpoint-&gt;ib_addr-&gt;addr_lock);
</span><br>
<span class="quotelev1">&gt; -            /* xoob_module_start_connect() should automaticly handle all other cases */
</span><br>
<span class="quotelev1">&gt; -            if (OMPI_SUCCESS != xoob_module_start_connect(NULL, endpoint))
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;Failed to restart connection from MCA_BTL_IB_ADDR_CONNECTING/CLOSED&quot;));
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -        default :
</span><br>
<span class="quotelev1">&gt; -            BTL_ERROR((&quot;Invalid endpoint status %d&quot;, endpoint-&gt;ib_addr-&gt;status));
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_UNLOCK(&amp;endpoint-&gt;ib_addr-&gt;addr_lock);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/* Init remote information structs */
</span><br>
<span class="quotelev1">&gt; -static int init_rem_info(mca_btl_openib_rem_info_t *rem_info)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    rem_info-&gt;rem_qps = (mca_btl_openib_rem_qp_info_t*)malloc(sizeof(mca_btl_openib_rem_qp_info_t));
</span><br>
<span class="quotelev1">&gt; -    if (NULL == rem_info-&gt;rem_qps) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;Failed to allocate memory for remote QP data\n&quot;));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    rem_info-&gt;rem_srqs = (mca_btl_openib_rem_srq_info_t*)malloc(sizeof(mca_btl_openib_rem_srq_info_t) *
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_component.num_xrc_qps);
</span><br>
<span class="quotelev1">&gt; -    if (NULL == rem_info-&gt;rem_srqs) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;Failed to allocate memory for remote SRQ data\n&quot;));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/* Free remote information structs */
</span><br>
<span class="quotelev1">&gt; -static void free_rem_info(mca_btl_openib_rem_info_t *rem_info)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    if (NULL != rem_info-&gt;rem_qps) {
</span><br>
<span class="quotelev1">&gt; -        free(rem_info-&gt;rem_qps);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    if (NULL != rem_info-&gt;rem_srqs) {
</span><br>
<span class="quotelev1">&gt; -        free(rem_info-&gt;rem_srqs);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Non blocking RML recv callback.  Read incoming QP and other info,
</span><br>
<span class="quotelev1">&gt; - * and if this endpoint is trying to connect, reply with our QP info,
</span><br>
<span class="quotelev1">&gt; - * otherwise try to modify QP's and establish reliable connection
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static void xoob_rml_recv_cb(int status, ompi_process_name_t* process_name,
</span><br>
<span class="quotelev1">&gt; -                        opal_buffer_t* buffer, ompi_rml_tag_t tag,
</span><br>
<span class="quotelev1">&gt; -                        void* cbdata)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int rc;
</span><br>
<span class="quotelev1">&gt; -    uint8_t message_type;
</span><br>
<span class="quotelev1">&gt; -    uint16_t requested_lid = 0;
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_rem_info_t rem_info;
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_endpoint_t *ib_endpoint = NULL;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if ( OMPI_SUCCESS != init_rem_info(&amp;rem_info)) {
</span><br>
<span class="quotelev1">&gt; -        return;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Get data. */
</span><br>
<span class="quotelev1">&gt; -    if ( OMPI_SUCCESS != xoob_receive_connect_data(&amp;rem_info, &amp;requested_lid, &amp;message_type, buffer)) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;Failed to read data\n&quot;));
</span><br>
<span class="quotelev1">&gt; -        mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -        return;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Processing message */
</span><br>
<span class="quotelev1">&gt; -    switch (message_type) {
</span><br>
<span class="quotelev1">&gt; -        case ENDPOINT_XOOB_CONNECT_REQUEST:
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;Received ENDPOINT_XOOB_CONNECT_REQUEST: lid %d, sid %&quot; PRIx64 &quot;, rlid %d\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                        rem_info.rem_lid,
</span><br>
<span class="quotelev1">&gt; -                        rem_info.rem_subnet_id,
</span><br>
<span class="quotelev1">&gt; -                        requested_lid));
</span><br>
<span class="quotelev1">&gt; -            ib_endpoint = xoob_find_endpoint(process_name,rem_info.rem_subnet_id,
</span><br>
<span class="quotelev1">&gt; -                    requested_lid, message_type);
</span><br>
<span class="quotelev1">&gt; -            if ( NULL == ib_endpoint) {
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;Got ENDPOINT_XOOB_CONNECT_REQUEST.&quot;
</span><br>
<span class="quotelev1">&gt; -                           &quot; Failed to find endpoint with subnet %&quot; PRIx64
</span><br>
<span class="quotelev1">&gt; -                           &quot; and LID %d&quot;,
</span><br>
<span class="quotelev1">&gt; -                           rem_info.rem_subnet_id,requested_lid));
</span><br>
<span class="quotelev1">&gt; -                mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -                return;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_LOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -            /* prepost data on receiver site */
</span><br>
<span class="quotelev1">&gt; -            if (OMPI_SUCCESS != mca_btl_openib_endpoint_post_recvs(ib_endpoint)) {
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;Failed to post on XRC SRQs&quot;));
</span><br>
<span class="quotelev1">&gt; -                mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -                OPAL_THREAD_UNLOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -                return;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            /* we should create qp and send the info + srq to requestor */
</span><br>
<span class="quotelev1">&gt; -            rc = xoob_reply_first_connect(ib_endpoint, &amp;rem_info);
</span><br>
<span class="quotelev1">&gt; -            if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;error in endpoint reply start connect&quot;));
</span><br>
<span class="quotelev1">&gt; -                mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -                OPAL_THREAD_UNLOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -                return;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            /* enable pooling for this btl */
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_UNLOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -        case ENDPOINT_XOOB_CONNECT_XRC_REQUEST:
</span><br>
<span class="quotelev1">&gt; -            /* pasha we don't need the remote lid here ??*/
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;Received ENDPOINT_XOOB_CONNECT_XRC_REQUEST: lid %d, sid %&quot; PRIx64 &quot;\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                        rem_info.rem_lid,
</span><br>
<span class="quotelev1">&gt; -                        rem_info.rem_subnet_id));
</span><br>
<span class="quotelev1">&gt; -            ib_endpoint = xoob_find_endpoint(process_name,rem_info.rem_subnet_id,
</span><br>
<span class="quotelev1">&gt; -                    requested_lid, message_type);
</span><br>
<span class="quotelev1">&gt; -            if ( NULL == ib_endpoint) {
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;Got ENDPOINT_XOOB_CONNECT_XRC_REQUEST.&quot;
</span><br>
<span class="quotelev1">&gt; -                            &quot; Failed to find endpoint with subnet %&quot; PRIx64 &quot; and LID %d&quot;,
</span><br>
<span class="quotelev1">&gt; -                            rem_info.rem_subnet_id,requested_lid));
</span><br>
<span class="quotelev1">&gt; -                mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -                return;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            if (OMPI_SUCCESS == xoob_recv_qp_connect(ib_endpoint, &amp;rem_info)) {
</span><br>
<span class="quotelev1">&gt; -                if (OMPI_SUCCESS != mca_btl_openib_endpoint_post_recvs(ib_endpoint)) {
</span><br>
<span class="quotelev1">&gt; -                    BTL_ERROR((&quot;Failed to post on XRC SRQs&quot;));
</span><br>
<span class="quotelev1">&gt; -                    mca_btl_openib_endpoint_invoke_error(ib_endpoint);
</span><br>
<span class="quotelev1">&gt; -                    return;
</span><br>
<span class="quotelev1">&gt; -                }
</span><br>
<span class="quotelev1">&gt; -                OPAL_THREAD_LOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -                rc = xoob_send_connect_data(ib_endpoint, ENDPOINT_XOOB_CONNECT_XRC_RESPONSE);
</span><br>
<span class="quotelev1">&gt; -                if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -                    BTL_ERROR((&quot;error in endpoint reply start connect&quot;));
</span><br>
<span class="quotelev1">&gt; -                    mca_btl_openib_endpoint_invoke_error(ib_endpoint);
</span><br>
<span class="quotelev1">&gt; -                    OPAL_THREAD_UNLOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -                    return;
</span><br>
<span class="quotelev1">&gt; -                }
</span><br>
<span class="quotelev1">&gt; -                OPAL_THREAD_UNLOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -            } else {
</span><br>
<span class="quotelev1">&gt; -                /* The XRC recv qp was destroyed */
</span><br>
<span class="quotelev1">&gt; -                OPAL_THREAD_LOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -                rc = xoob_send_connect_data(ib_endpoint, ENDPOINT_XOOB_CONNECT_XRC_NR_RESPONSE);
</span><br>
<span class="quotelev1">&gt; -                if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; -                    BTL_ERROR((&quot;error in endpoint reply start connect&quot;));
</span><br>
<span class="quotelev1">&gt; -                    mca_btl_openib_endpoint_invoke_error(ib_endpoint);
</span><br>
<span class="quotelev1">&gt; -                    OPAL_THREAD_UNLOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -                    return;
</span><br>
<span class="quotelev1">&gt; -                }
</span><br>
<span class="quotelev1">&gt; -                OPAL_THREAD_UNLOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            /* enable pooling for this btl */
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -        case ENDPOINT_XOOB_CONNECT_RESPONSE:
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;Received ENDPOINT_XOOB_CONNECT_RESPONSE: lid %d, sid %&quot; PRIx64 &quot;\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                        rem_info.rem_lid,
</span><br>
<span class="quotelev1">&gt; -                        rem_info.rem_subnet_id));
</span><br>
<span class="quotelev1">&gt; -            ib_endpoint = xoob_find_endpoint(process_name, rem_info.rem_subnet_id,
</span><br>
<span class="quotelev1">&gt; -                    rem_info.rem_lid, message_type);
</span><br>
<span class="quotelev1">&gt; -            if ( NULL == ib_endpoint) {
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;Got ENDPOINT_XOOB_CONNECT_RESPONSE.&quot;
</span><br>
<span class="quotelev1">&gt; -                            &quot; Failed to find endpoint with subnet %&quot; PRIx64 &quot; and LID %d&quot;,
</span><br>
<span class="quotelev1">&gt; -                            rem_info.rem_subnet_id,rem_info.rem_lid));
</span><br>
<span class="quotelev1">&gt; -                mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -                return;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_LOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -            /* we got all the data srq. switch the endpoint to connect mode */
</span><br>
<span class="quotelev1">&gt; -            XOOB_SET_REMOTE_INFO(ib_endpoint-&gt;rem_info, rem_info);
</span><br>
<span class="quotelev1">&gt; -            /* update ib_addr with remote qp number */
</span><br>
<span class="quotelev1">&gt; -            ib_endpoint-&gt;ib_addr-&gt;remote_xrc_rcv_qp_num =
</span><br>
<span class="quotelev1">&gt; -                ib_endpoint-&gt;rem_info.rem_qps-&gt;rem_qp_num;
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;rem_info: lid %d, sid %&quot; PRIx64
</span><br>
<span class="quotelev1">&gt; -                         &quot; ep %d %&quot; PRIx64 &quot;\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                         rem_info.rem_lid,
</span><br>
<span class="quotelev1">&gt; -                         rem_info.rem_subnet_id,
</span><br>
<span class="quotelev1">&gt; -                         ib_endpoint-&gt;rem_info.rem_lid,
</span><br>
<span class="quotelev1">&gt; -                         ib_endpoint-&gt;rem_info.rem_subnet_id));
</span><br>
<span class="quotelev1">&gt; -            if (OMPI_SUCCESS != xoob_send_qp_connect(ib_endpoint, &amp;rem_info)) {
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;Failed to connect  endpoint\n&quot;));
</span><br>
<span class="quotelev1">&gt; -                mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -                OPAL_THREAD_UNLOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -                return;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_endpoint_cpc_complete(ib_endpoint);
</span><br>
<span class="quotelev1">&gt; -            /* cpc complete unlock the endpoint */
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -        case ENDPOINT_XOOB_CONNECT_XRC_RESPONSE:
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;Received ENDPOINT_XOOB_CONNECT_XRC_RESPONSE: lid %d, sid %&quot; PRIx64 &quot;\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                        rem_info.rem_lid,
</span><br>
<span class="quotelev1">&gt; -                        rem_info.rem_subnet_id));
</span><br>
<span class="quotelev1">&gt; -            ib_endpoint = xoob_find_endpoint(process_name, rem_info.rem_subnet_id,
</span><br>
<span class="quotelev1">&gt; -                    rem_info.rem_lid, message_type);
</span><br>
<span class="quotelev1">&gt; -            if ( NULL == ib_endpoint) {
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;Got ENDPOINT_XOOB_CONNECT_XRC_RESPONSE.&quot;
</span><br>
<span class="quotelev1">&gt; -                            &quot; Failed to find endpoint with subnet %&quot; PRIx64 &quot; and LID %d&quot;,
</span><br>
<span class="quotelev1">&gt; -                            rem_info.rem_subnet_id,rem_info.rem_lid));
</span><br>
<span class="quotelev1">&gt; -                mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -                return;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_LOCK(&amp;ib_endpoint-&gt;endpoint_lock);
</span><br>
<span class="quotelev1">&gt; -            /* we got srq numbers on our request */
</span><br>
<span class="quotelev1">&gt; -            XOOB_SET_REMOTE_INFO(ib_endpoint-&gt;rem_info, rem_info);
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_endpoint_cpc_complete(ib_endpoint);
</span><br>
<span class="quotelev1">&gt; -            /* cpc complete unlock the endpoint */
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -        case ENDPOINT_XOOB_CONNECT_XRC_NR_RESPONSE:
</span><br>
<span class="quotelev1">&gt; -            /* The XRC recv site already was destroyed so we need
</span><br>
<span class="quotelev1">&gt; -             * start to bringup the connection from scratch  */
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;Received ENDPOINT_XOOB_CONNECT_XRC_NR_RESPONSE: lid %d, sid %&quot; PRIx64 &quot;\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                        rem_info.rem_lid,
</span><br>
<span class="quotelev1">&gt; -                        rem_info.rem_subnet_id));
</span><br>
<span class="quotelev1">&gt; -            ib_endpoint = xoob_find_endpoint(process_name, rem_info.rem_subnet_id,
</span><br>
<span class="quotelev1">&gt; -                    rem_info.rem_lid, message_type);
</span><br>
<span class="quotelev1">&gt; -            if ( NULL == ib_endpoint) {
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;Got ENDPOINT_XOOB_CONNECT_XRC_NR_RESPONSE.&quot;
</span><br>
<span class="quotelev1">&gt; -                            &quot; Failed to find endpoint with subnet %&quot; PRIx64 &quot; and LID %d&quot;,
</span><br>
<span class="quotelev1">&gt; -                            rem_info.rem_subnet_id,rem_info.rem_lid));
</span><br>
<span class="quotelev1">&gt; -                mca_btl_openib_endpoint_invoke_error(NULL);
</span><br>
<span class="quotelev1">&gt; -                return;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            xoob_restart_connect(ib_endpoint);
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -        default :
</span><br>
<span class="quotelev1">&gt; -            BTL_ERROR((&quot;Invalid message type %d&quot;, message_type));
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    free_rem_info(&amp;rem_info);
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * XOOB interface functions
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/* Quere for the XOOB priority - will be highest in XRC case */
</span><br>
<span class="quotelev1">&gt; -static int xoob_component_query(mca_btl_openib_module_t *openib_btl,
</span><br>
<span class="quotelev1">&gt; -        ompi_btl_openib_connect_base_module_t **cpc)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    if (mca_btl_openib_component.num_xrc_qps &lt;= 0) {
</span><br>
<span class="quotelev1">&gt; -        opal_output_verbose(5, ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; -                            &quot;openib BTL: xoob CPC only supported with XRC receive queues; skipped on %s:%d&quot;,
</span><br>
<span class="quotelev1">&gt; -                            ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; -                            openib_btl-&gt;port_num);
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    *cpc = malloc(sizeof(ompi_btl_openib_connect_base_module_t));
</span><br>
<span class="quotelev1">&gt; -    if (NULL == *cpc) {
</span><br>
<span class="quotelev1">&gt; -        opal_output_verbose(5, ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; -                            &quot;openib BTL: xoob CPC system error (malloc failed)&quot;);
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* If this btl supports XOOB, then post the RML message.  But
</span><br>
<span class="quotelev1">&gt; -       ensure to only post it *once*, because another btl may have
</span><br>
<span class="quotelev1">&gt; -       come in before this and already posted it. */
</span><br>
<span class="quotelev1">&gt; -    if (!rml_recv_posted) {
</span><br>
<span class="quotelev1">&gt; -        ompi_rte_recv_buffer_nb(OMPI_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -                                OMPI_RML_TAG_XOPENIB,
</span><br>
<span class="quotelev1">&gt; -                                OMPI_RML_PERSISTENT,
</span><br>
<span class="quotelev1">&gt; -                                xoob_rml_recv_cb,
</span><br>
<span class="quotelev1">&gt; -                                NULL);
</span><br>
<span class="quotelev1">&gt; -        rml_recv_posted = true;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (xoob_priority &gt; 100) {
</span><br>
<span class="quotelev1">&gt; -        xoob_priority = 100;
</span><br>
<span class="quotelev1">&gt; -    } else if (xoob_priority &lt; -1) {
</span><br>
<span class="quotelev1">&gt; -        xoob_priority = -1;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;data.cbm_component = &amp;ompi_btl_openib_connect_xoob;
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;data.cbm_priority = xoob_priority;
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;data.cbm_modex_message = NULL;
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;data.cbm_modex_message_len = 0;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;cbm_endpoint_init = NULL;
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;cbm_start_connect = xoob_module_start_connect;
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;cbm_endpoint_finalize = NULL;
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;cbm_finalize = NULL;
</span><br>
<span class="quotelev1">&gt; -    (*cpc)-&gt;cbm_uses_cts = false;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    opal_output_verbose(5, ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; -                        &quot;openib BTL: xoob CPC available for use on %s:%d&quot;,
</span><br>
<span class="quotelev1">&gt; -                        ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; -                        openib_btl-&gt;port_num);
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/* Open - this functions sets up any xoob specific commandline params */
</span><br>
<span class="quotelev1">&gt; -static void xoob_component_register(void)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    /* the priority is initialized in the declaration above */
</span><br>
<span class="quotelev1">&gt; -    (void) mca_base_component_var_register(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; -                                           &quot;connect_xoob_priority&quot;,
</span><br>
<span class="quotelev1">&gt; -                                           &quot;The selection method priority for xoob&quot;,
</span><br>
<span class="quotelev1">&gt; -                                           MCA_BASE_VAR_TYPE_INT, NULL, 0, 0,
</span><br>
<span class="quotelev1">&gt; -                                           OPAL_INFO_LVL_9,
</span><br>
<span class="quotelev1">&gt; -                                           MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt; -                                           &amp;xoob_priority);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (xoob_priority &gt; 100) {
</span><br>
<span class="quotelev1">&gt; -        xoob_priority = 100;
</span><br>
<span class="quotelev1">&gt; -    } else if (xoob_priority &lt; -1) {
</span><br>
<span class="quotelev1">&gt; -        xoob_priority = -1;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Connect function.  Start initiation of connections to a remote
</span><br>
<span class="quotelev1">&gt; - * peer.  We send our Queue Pair information over the RML/OOB
</span><br>
<span class="quotelev1">&gt; - * communication mechanism.  On completion of our send, a send
</span><br>
<span class="quotelev1">&gt; - * completion handler is called.
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static int xoob_module_start_connect(ompi_btl_openib_connect_base_module_t *cpc,
</span><br>
<span class="quotelev1">&gt; -                                     mca_btl_base_endpoint_t *endpoint)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int rc = OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    OPAL_THREAD_LOCK(&amp;endpoint-&gt;ib_addr-&gt;addr_lock);
</span><br>
<span class="quotelev1">&gt; -    switch (endpoint-&gt;ib_addr-&gt;status) {
</span><br>
<span class="quotelev1">&gt; -        case MCA_BTL_IB_ADDR_CLOSED:
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;The IB addr: sid %&quot; PRIx64 &quot; lid %d&quot;
</span><br>
<span class="quotelev1">&gt; -                        &quot;in MCA_BTL_IB_ADDR_CLOSED status,&quot;
</span><br>
<span class="quotelev1">&gt; -                        &quot; sending ENDPOINT_XOOB_CONNECT_REQUEST\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                        endpoint-&gt;ib_addr-&gt;subnet_id,endpoint-&gt;ib_addr-&gt;lid));
</span><br>
<span class="quotelev1">&gt; -            if (OMPI_SUCCESS != (rc = xoob_send_qp_create(endpoint))) {
</span><br>
<span class="quotelev1">&gt; -                break;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -            /* Send connection info over to remote endpoint */
</span><br>
<span class="quotelev1">&gt; -            endpoint-&gt;endpoint_state = MCA_BTL_IB_CONNECTING;
</span><br>
<span class="quotelev1">&gt; -            endpoint-&gt;ib_addr-&gt;status = MCA_BTL_IB_ADDR_CONNECTING;
</span><br>
<span class="quotelev1">&gt; -            if (OMPI_SUCCESS !=
</span><br>
<span class="quotelev1">&gt; -                    (rc = xoob_send_connect_data(endpoint, ENDPOINT_XOOB_CONNECT_REQUEST))) {
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;Error sending connect request, error code %d&quot;, rc));
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -        case MCA_BTL_IB_ADDR_CONNECTING:
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;The IB addr: sid %&quot; PRIx64 &quot; lid %d&quot;
</span><br>
<span class="quotelev1">&gt; -                        &quot;in MCA_BTL_IB_ADDR_CONNECTING status,&quot;
</span><br>
<span class="quotelev1">&gt; -                        &quot; Subscribing to this address\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                        endpoint-&gt;ib_addr-&gt;subnet_id,endpoint-&gt;ib_addr-&gt;lid));
</span><br>
<span class="quotelev1">&gt; -            /* some body already connectng to this machine, lets wait */
</span><br>
<span class="quotelev1">&gt; -            opal_list_append(&amp;endpoint-&gt;ib_addr-&gt;pending_ep, &amp;(endpoint-&gt;super));
</span><br>
<span class="quotelev1">&gt; -            endpoint-&gt;endpoint_state = MCA_BTL_IB_CONNECTING;
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -        case MCA_BTL_IB_ADDR_CONNECTED:
</span><br>
<span class="quotelev1">&gt; -            /* so we have the send qp, we just need the recive site.
</span><br>
<span class="quotelev1">&gt; -             * Send request for SRQ numbers */
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;The IB addr: sid %&quot; PRIx64 &quot; lid %d&quot;
</span><br>
<span class="quotelev1">&gt; -                        &quot;in MCA_BTL_IB_ADDR_CONNECTED status,&quot;
</span><br>
<span class="quotelev1">&gt; -                        &quot; sending ENDPOINT_XOOB_CONNECT_XRC_REQUEST\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                        endpoint-&gt;ib_addr-&gt;subnet_id,endpoint-&gt;ib_addr-&gt;lid));
</span><br>
<span class="quotelev1">&gt; -            endpoint-&gt;endpoint_state = MCA_BTL_IB_CONNECTING;
</span><br>
<span class="quotelev1">&gt; -            if (OMPI_SUCCESS !=
</span><br>
<span class="quotelev1">&gt; -                    (rc = xoob_send_connect_data(endpoint, ENDPOINT_XOOB_CONNECT_XRC_REQUEST))) {
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;error sending xrc connect request, error code %d&quot;, rc));
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -        default :
</span><br>
<span class="quotelev1">&gt; -            BTL_ERROR((&quot;Invalid endpoint status %d&quot;, endpoint-&gt;ib_addr-&gt;status));
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    OPAL_THREAD_UNLOCK(&amp;endpoint-&gt;ib_addr-&gt;addr_lock);
</span><br>
<span class="quotelev1">&gt; -    return rc;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Finalize function.  Cleanup RML non-blocking receive.
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -static int xoob_component_finalize(void)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    if (rml_recv_posted) {
</span><br>
<span class="quotelev1">&gt; -        ompi_rte_recv_cancel(OMPI_NAME_WILDCARD, OMPI_RML_TAG_XOPENIB);
</span><br>
<span class="quotelev1">&gt; -        rml_recv_posted = false;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; -    btl_openib_connect_sl_finalize();
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Deleted: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.h	2013-11-13 23:16:53 EST (Wed, 13 Nov 2013)	(r29702)
</span><br>
<span class="quotelev1">&gt; +++ /dev/null	00:00:00 1970	(deleted)
</span><br>
<span class="quotelev1">&gt; @@ -1,19 +0,0 @@
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2007 Mellanox Technologies.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * $HEADER$
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#ifndef BTL_OPENIB_CONNECT_XOOB_H
</span><br>
<span class="quotelev1">&gt; -#define BTL_OPENIB_CONNECT_XOOB_H
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -extern ompi_btl_openib_connect_base_component_t ompi_btl_openib_connect_xoob;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13247.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13245.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703 - in trunk:	contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13245.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703 - in trunk:	contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13247.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13247.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
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
