<?php
/**
*<div id="function.random-bytes" class="refentry">  <div class="refnamediv">   <h1 class="refname">random_bytes</h1>   <p class="verinfo">(PHP 7)</p><p class="refpurpose"><span class="refname">random_bytes</span> &mdash; <span class="dc-title">Generates cryptographically secure pseudo-random bytes</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.random-bytes-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">string</span> <span class="methodname"><strong>random_bytes</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$length</code></span>    )</div>    <p class="para rdfs-comment">    Generates an arbitrary length string of cryptographic random bytes that are    suitable for cryptographic use, such as when generating salts, keys or    initialization vectors.   </p>    <p class="para">  The sources of randomness used for this function are as follows: </p> <ul class="itemizedlist">  <li class="listitem">   <span class="simpara">    On Windows,    <a href="http://php.net/manual/zh/https://msdn.microsoft.com/en-us/library/windows/desktop/aa379942(v=vs.85).aspx" class="link external">&raquo;&nbsp;<span class="function"><strong>CryptGenRandom()</strong></span></a>    will always be used. As of PHP 7.2.0, the    <a href="http://php.net/manual/zh/https://docs.microsoft.com/en-us/windows/desktop/SecCNG/cng-portal" class="link external">&raquo;&nbsp;CNG-API</a>    will always be used instead.   </span>  </li>  <li class="listitem">   <span class="simpara">    On Linux, the    <a href="http://man7.org/linux/man-pages/man2/getrandom.2.html" class="link external">&raquo;&nbsp;getrandom(2)</a>    syscall will be used if available.   </span>  </li>  <li class="listitem">   <span class="simpara">    On other platforms, <var class="filename">/dev/urandom</var> will be used.   </span>  </li>  <li class="listitem">   <span class="simpara">    If none of the aforementioned sources are available, then an    <a href="http://php.net/manual/zh/class.exception.php" class="classname">Exception</a> will be thrown.   </span>  </li> </ul>      <blockquote class="note"><p><strong class="note">Note</strong>:    <span class="simpara">    Although this function was added to PHP in PHP 7.0, a    <a href="http://php.net/manual/zh/https://github.com/paragonie/random_compat" class="link external">&raquo;&nbsp;userland implementation</a>    is available for PHP 5.2 to 5.6, inclusive.   </span>  </p></blockquote>   </div>    <div class="refsect1 parameters" id="refsect1-function.random-bytes-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">length</code></dt>      <dd>       <p class="para">       The length of the random string that should be returned in bytes.      </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.random-bytes-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns a string containing the requested number of cryptographically    secure random bytes.   </p>  </div>    <div class="refsect1 errors" id="refsect1-function.random-bytes-errors">   <h3 class="title">错误／异常</h3>   <ul class="itemizedlist">      <li class="listitem">   <span class="simpara">    If an appropriate source of randomness cannot be found,    an <a href="http://php.net/manual/zh/class.exception.php" class="classname">Exception</a> will be thrown.   </span>  </li>  <li class="listitem">   <span class="simpara">     If invalid parameters are given, a <strong class="classname">TypeError</strong>     will be thrown.   </span>  </li>     <li class="listitem">     <span class="simpara">      If an invalid <code class="parameter">length</code> of bytes is given, an      <strong class="classname">Error</strong> will be thrown.     </span>    </li>   </ul>  </div>    <div class="refsect1 examples" id="refsect1-function.random-bytes-examples">   <h3 class="title">范例</h3>   <div class="example" id="example-884">    <p><strong>Example #1 <span class="function"><strong>random_bytes()</strong></span> example</strong></p>    <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$bytes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">random_bytes</span><span style="color: #007700">(</span><span style="color: #9876AA">5</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">bin2hex</span><span style="color: #007700">(</span><span style="color: #9876AA">$bytes</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>    </div>     <div class="example-contents"><p>以上例程的输出类似于：</p></div>    <div class="example-contents screen"> <div class="cdata"><pre> string(10) &quot;385e33f741&quot; </pre></div>    </div>   </div>  </div>    <div class="refsect1 seealso" id="refsect1-function.random-bytes-seealso">   <h3 class="title">参见</h3>   <ul class="simplelist">    <li class="member"><span class="function">{@link random_int()} - Generates cryptographically secure pseudo-random integers</span></li>    <li class="member"><span class="function">{@link openssl_random_pseudo_bytes()} - 生成一个伪随机字节串</span></li>    <li class="member"><span class="function">{@link bin2hex()} - 函数把包含数据的二进制字符串转换为十六进制值</span></li>   </ul>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.csprng.php">CSPRNG 函数</a></div></div>
 * @return string Returns a string containing the requested number of cryptographically secure random bytes.*/
function random_bytes ($length) {}

/**
*<div id="function.random-int" class="refentry">  <div class="refnamediv">   <h1 class="refname">random_int</h1>   <p class="verinfo">(PHP 7)</p><p class="refpurpose"><span class="refname">random_int</span> &mdash; <span class="dc-title">Generates cryptographically secure pseudo-random integers</span></p>   </div>   <div class="refsect1 description" id="refsect1-function.random-int-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">int</span> <span class="methodname"><strong>random_int</strong></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$min</code></span>    , <span class="methodparam"><span class="type">int</span> <code class="parameter">$max</code></span>    )</div>    <p class="para rdfs-comment">    Generates cryptographic random integers that are suitable for use where    unbiased results are critical, such as when shuffling a deck of cards for a    poker game.   </p>    <p class="para">  The sources of randomness used for this function are as follows: </p> <ul class="itemizedlist">  <li class="listitem">   <span class="simpara">    On Windows,    <a href="http://php.net/manual/zh/https://msdn.microsoft.com/en-us/library/windows/desktop/aa379942(v=vs.85).aspx" class="link external">&raquo;&nbsp;<span class="function"><strong>CryptGenRandom()</strong></span></a>    will always be used. As of PHP 7.2.0, the    <a href="http://php.net/manual/zh/https://docs.microsoft.com/en-us/windows/desktop/SecCNG/cng-portal" class="link external">&raquo;&nbsp;CNG-API</a>    will always be used instead.   </span>  </li>  <li class="listitem">   <span class="simpara">    On Linux, the    <a href="http://man7.org/linux/man-pages/man2/getrandom.2.html" class="link external">&raquo;&nbsp;getrandom(2)</a>    syscall will be used if available.   </span>  </li>  <li class="listitem">   <span class="simpara">    On other platforms, <var class="filename">/dev/urandom</var> will be used.   </span>  </li>  <li class="listitem">   <span class="simpara">    If none of the aforementioned sources are available, then an    <a href="http://php.net/manual/zh/class.exception.php" class="classname">Exception</a> will be thrown.   </span>  </li> </ul>      <blockquote class="note"><p><strong class="note">Note</strong>:    <span class="simpara">    Although this function was added to PHP in PHP 7.0, a    <a href="http://php.net/manual/zh/https://github.com/paragonie/random_compat" class="link external">&raquo;&nbsp;userland implementation</a>    is available for PHP 5.2 to 5.6, inclusive.   </span>  </p></blockquote>   </div>    <div class="refsect1 parameters" id="refsect1-function.random-int-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <code class="parameter">min</code></dt>      <dd>       <p class="para">       The lowest value to be returned, which must be       <strong><code>PHP_INT_MIN</code></strong> or higher.      </p>     </dd>              <dt> <code class="parameter">max</code></dt>      <dd>       <p class="para">       The highest value to be returned, which must be less than or equal to       <strong><code>PHP_INT_MAX</code></strong>.      </p>     </dd>        </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.random-int-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns a cryptographically secure random integer in the range    <code class="parameter">min</code> to <code class="parameter">max</code>, inclusive.   </p>  </div>    <div class="refsect1 errors" id="refsect1-function.random-int-errors">   <h3 class="title">错误／异常</h3>   <ul class="itemizedlist">      <li class="listitem">   <span class="simpara">    If an appropriate source of randomness cannot be found,    an <a href="http://php.net/manual/zh/class.exception.php" class="classname">Exception</a> will be thrown.   </span>  </li>  <li class="listitem">   <span class="simpara">     If invalid parameters are given, a <strong class="classname">TypeError</strong>     will be thrown.   </span>  </li>     <li class="listitem">     <span class="simpara">      If <code class="parameter">max</code> is less than <code class="parameter">min</code>, an      <strong class="classname">Error</strong> will be thrown.     </span>    </li>   </ul>  </div>    <div class="refsect1 examples" id="refsect1-function.random-int-examples">   <h3 class="title">范例</h3>   <div class="example" id="example-885">    <p><strong>Example #1 <span class="function"><strong>random_int()</strong></span> example</strong></p>    <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">random_int</span><span style="color: #007700">(</span><span style="color: #9876AA">100</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">999</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">random_int</span><span style="color: #007700">(-</span><span style="color: #9876AA">1000</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">0</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>    </div>     <div class="example-contents"><p>以上例程的输出类似于：</p></div>    <div class="example-contents screen"> <div class="cdata"><pre> int(248) int(-898) </pre></div>    </div>   </div>  </div>    <div class="refsect1 seealso" id="refsect1-function.random-int-seealso">   <h3 class="title">参见</h3>   <ul class="simplelist">    <li class="member"><span class="function">{@link random_bytes()} - Generates cryptographically secure pseudo-random bytes</span></li>   </ul>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.csprng.php">CSPRNG 函数</a></div></div>
 * @return int Returns a cryptographically secure random integer in the range min to max, inclusive.*/
function random_int ($min, $max) {}