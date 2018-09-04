<div id="comments"></div><div id="disqus_thread"></div>

<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'ancientbeast';
    var disqus_identifier = '<?php echo $x; ?>';
    var disqus_url = window.location.href;
	var disqus_config = function () {
	  this.language = "en";
	};
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'https://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
    /* * * Disqus Reset Function * * */
    var resetDisqus = function(newIdentifier, newUrl, newTitle, newLanguage) {
				if (!window.DISQUS) {
					// Nasty hack to get around PHP + JS rendering conflicts.
					setTimeout(function() {
						resetDisqus(newIdentifier, newUrl, newTitle, newLanguage);
					}, 250);
					return;
				}

        DISQUS.reset({
            reload: true,
            config: function () {
                this.page.identifier = newIdentifier;
                this.page.url = newUrl;
                this.page.title = newTitle;
                this.language = newLanguage;
            }
        });
    };
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
