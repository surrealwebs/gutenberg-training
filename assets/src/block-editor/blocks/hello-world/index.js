/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';

/**
 * Internal dependencies
 */
import './edit.css';

export const name = 'gutenberg-training/hello-world';
export const Edit = () => <h2>{ __( 'Hello Editor', 'gutenberg-training' ) }</h2>;
export const Save = () => <h2>{ __( 'Hello Website', 'gutenberg-training' ) }</h2>;

export const settings = {
	title: __( 'Hello World', 'gutenberg-training' ),
	icon: 'smiley',
	category: 'common',
	edit: Edit,
	save: Save,
};
