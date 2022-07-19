( function( api ) {

	// Extends our custom "formation-lite" section.
	api.sectionConstructor['formation-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );