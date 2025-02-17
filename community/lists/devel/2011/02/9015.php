<?
$subject_val = "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 17:03:17 2011" -->
<!-- isoreceived="20110223220317" -->
<!-- sent="Wed, 23 Feb 2011 17:03:12 -0500" -->
<!-- isosent="20110223220312" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4" -->
<!-- id="5FD373A8-CE51-4984-B237-C2B7F7DAC146_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1F1633A3-F5AA-4AB4-972B-0F73B72CA378_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 17:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9016.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449"</a>
<li><strong>Previous message:</strong> <a href="9014.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>In reply to:</strong> <a href="9014.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9019.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>Reply:</strong> <a href="9019.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Or how about this version ? Here I use the + modifier and I don't put any constraints on the input line.
<br>
<p>static inline int32_t opal_atomic_add_32(volatile int32_t* v, int i)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int ret = i;
<br>
&nbsp;&nbsp;__asm__ __volatile__(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMPLOCK &quot;xaddl %1,%0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;+m&quot; (*v), &quot;+r&quot; (ret)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;memory&quot;, &quot;cc&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
&nbsp;&nbsp;return (ret+i);
<br>
}
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Feb 23, 2011, at 16:59 , George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Jay,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the code. The code you pointed out is only used during configure, so I don't think is that critical. However, we use similar code deep into our voodoo assembly generation, for opal_atomic_add_32 and opal_atomic_sub_32.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So if I understand your statement the correct version of the code should be
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static inline int32_t opal_atomic_add_32(volatile int32_t* v, int i)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int ret = i;
</span><br>
<span class="quotelev1">&gt;   __asm__ __volatile__(
</span><br>
<span class="quotelev1">&gt;                        SMPLOCK &quot;xaddl %1,%0&quot;
</span><br>
<span class="quotelev1">&gt;                        :&quot;=m&quot; (*v), &quot;+r&quot; (ret)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; new &gt;&gt;               :&quot;m&quot; (*v)
</span><br>
<span class="quotelev1">&gt;                        );
</span><br>
<span class="quotelev1">&gt;   return (ret+i);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the GCC extended ASM documentation (<a href="http://gcc.gnu.org/onlinedocs/gcc/Modifiers.html#Modifiers">http://gcc.gnu.org/onlinedocs/gcc/Modifiers.html#Modifiers</a>), it is specified:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; `='   Means that this operand is write-only for this instruction: the previous value is discarded and replaced by output data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; `+'   Means that this operand is both read and written by the instruction.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Based on this info, I would rather rewrite this function like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static inline int32_t opal_atomic_add_32(volatile int32_t* v, int i)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int ret = i;
</span><br>
<span class="quotelev1">&gt;   __asm__ __volatile__(
</span><br>
<span class="quotelev1">&gt;                        SMPLOCK &quot;xaddl %1,%0&quot;
</span><br>
<span class="quotelev1">&gt;                        : &quot;=m&quot; (*v), &quot;=r&quot; (ret)
</span><br>
<span class="quotelev1">&gt;                        : &quot;m&quot; (*v), &quot;1&quot; (ret)
</span><br>
<span class="quotelev1">&gt;                        : &quot;memory&quot;, &quot;cc&quot;
</span><br>
<span class="quotelev1">&gt;                        );
</span><br>
<span class="quotelev1">&gt;   return (ret+i);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you ask the kindly GCC expert which version is &quot;correct&quot; (whatever the definition of correct might means related to GCC extended assembly). Do I have to specify = for the output if I put the register on the input? Aren't this conflicting?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 23, 2011, at 13:04 , Jay Fenlason wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was recently handed
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://bugzilla.redhat.com/attachment.cgi?id=480307">https://bugzilla.redhat.com/attachment.cgi?id=480307</a>
</span><br>
<span class="quotelev2">&gt;&gt; for which a kindly GCC expert attached the enclosed patch.  Apparently
</span><br>
<span class="quotelev2">&gt;&gt; this only causes problems on 32-bit i686 machines, which could by why
</span><br>
<span class="quotelev2">&gt;&gt; it has gone undetected until now.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    -- JF
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --- openmpi-1.5/opal/config/opal_config_asm.m4.jj	2010-09-28 23:33:51.000000000 +0200
</span><br>
<span class="quotelev2">&gt;&gt; +++ openmpi-1.5/opal/config/opal_config_asm.m4	2011-02-23 01:39:21.191433509 +0100
</span><br>
<span class="quotelev2">&gt;&gt; @@ -885,7 +885,7 @@ AC_DEFUN([OMPI_CONFIG_ASM],[
</span><br>
<span class="quotelev2">&gt;&gt;                ompi_cv_asm_arch=&quot;AMD64&quot;
</span><br>
<span class="quotelev2">&gt;&gt;            fi
</span><br>
<span class="quotelev2">&gt;&gt;            OPAL_ASM_SUPPORT_64BIT=1
</span><br>
<span class="quotelev2">&gt;&gt; -            OMPI_GCC_INLINE_ASSIGN='&quot;xaddl %1,%0&quot; : &quot;=m&quot;(ret), &quot;+r&quot;(negone)'
</span><br>
<span class="quotelev2">&gt;&gt; +            OMPI_GCC_INLINE_ASSIGN='&quot;xaddl %1,%0&quot; : &quot;=m&quot;(ret), &quot;+r&quot;(negone) : &quot;m&quot;(ret)'
</span><br>
<span class="quotelev2">&gt;&gt;            ;;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        ia64-*)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;I disapprove of what you say, but I will defend to the death your right to say it&quot;
</span><br>
<span class="quotelev1">&gt;  -- Evelyn Beatrice Hall
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&quot;To preserve the freedom of the human mind then and freedom of the press, every spirit should be ready to devote itself to martyrdom; for as long as we may think as we will, and speak as we think, the condition of man will proceed in improvement.&quot;
<br>
&nbsp;&nbsp;-- Thomas Jefferson, 1799
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9016.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449"</a>
<li><strong>Previous message:</strong> <a href="9014.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>In reply to:</strong> <a href="9014.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9019.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>Reply:</strong> <a href="9019.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
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
