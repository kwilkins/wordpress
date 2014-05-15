=== Twitch Live Badge ===
Contributors: kwilkins
Donate link: http://kwilkins.com/gifts-and-donations
Tags: livestream, stream, twitch, twitch.tv, kappa, justin.tv, kwilkins
Requires at least: 3.0
Tested up to: 3.3.2
Stable tag: 1.0

Twitch Live Badge allows you to set content to show if a twitch.tv channel is actively broadcasting.

== Description ==

[Twitch Live Badge](http://kwilkins.com/twich-live-badge) allows you to configure content to show automatically on your wordpress site when a twitch.tv is actively broadcasting.  This could be a message/link to your channel, a simple "LIVE" link in your menu, a custom image, or a combination of choices.  It also gives you access to include some info from the channel(game title, status message, viewer count, etc.) in your content.

== Changelog ==

= 1.0 =

First version.

== Installation ==

1. Upload/Install plugin and activate it on the Plugins page
2. Go to the Twitch Live Badge settings to configure settings
3. Include the following HTML if/where you want the badge to be rendered

	<div id="[@twitch-channel-name]" class="twitch-status">
		<div class="twitch-live">[@content-when-live]</div>
		<div class="twitch-offline">[@content-when-offline]</div>
	</div>
	
	@twitch-channel-name	:: the channel name this bade will relate to; example: padfoot240
	@content-when-live		:: the content that will show when the twitch channel is live; example: Currently live on twitch, playing {game}!
	@content-when-offline	:: the content that will show when the twitch channel is offline; example: <img src="../streamOffline.png">

4. Support eSports

== Frequently Asked Questions ==

= What info from the channel can I include in the @content-when-live? =

Currently I only have the game title working, but I'm hoping to expand it in future releases.  You can include the game title in your messages by putting "{game}" where you want the game title to appear.

= I'm broadcasting, why isn't the @content-when-live showing? =

It can sometimes take a few minutes for twitch to show a channel as live.

= Why isn't this already built into WP? =

I don't know. Hopefully it will be in a future release in one form or another because the current method sucks.

== Why doesn't it do [@this-feature]? ==

If you have suggestions or thoughts to improve it, drop me a line and I might work it into the plugin!

== Support/Appreciation ==

I hope you're enjoying it.  If you like the plugin, consider showing your appreciation by saying thank you or making a [small donation](http://kwilkins.com/gifts-and-donations).